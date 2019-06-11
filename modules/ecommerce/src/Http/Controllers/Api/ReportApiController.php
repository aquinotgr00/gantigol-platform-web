<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use Carbon\Carbon;

class ReportApiController extends Controller
{
    public function sales(Request $request) {
        $rows = $request->query('rows',10);
        
        $request->validate([
            'rows'=>'numeric',
            'invoice_daterange'=>'nullable',
            'customer_name'=>'nullable|string',
            'total_amount_from'=>'nullable|numeric',
            'total_amount_to'=>'nullable|numeric',
            'payment_status'=>'nullable|string',
        ]);

        $filtered = $request->query('filtered',null);
        $invoice_daterange = $request->query('invoice_daterange',null);
        $customer_name = $request->query('customer_name',null);
        $total_amount_from = $request->query('total_amount_from',null);
        $total_amount_to = $request->query('total_amount_to',null);
        $payment_status = $request->query('payment_status',null);
        
        $available_payment_status = config('midtrans.payment.status');
        
        $queryString = ['rows'=>$rows];
        
        $orders = Order::with(['user','items.productVariant.product']);
        
        if($invoice_daterange) {
            $queryString['invoice_daterange'] = $invoice_daterange;
            $orders = $orders->whereBetween('orders.created_at',parseDateRange($invoice_daterange));
        }
        
        if($customer_name) {
            $queryString['customer_name'] = $customer_name;
            $orders = $orders->where('users.name','LIKE',"%{$customer_name}%");
        }
        
        if(($total_amount_from>0) && ($total_amount_to>0)) {
            $queryString['total_amount_from'] = $total_amount_from;
            $queryString['total_amount_to'] = $total_amount_to;
            $orders = $orders->whereBetween('orders.total_amount',[$total_amount_from, $total_amount_to]);
        }
        
        if($payment_status) {
            $queryString['payment_status'] = $payment_status;
            $orders = $orders->where('orders.payment_status',$payment_status);
        }
        
        $queryString = array_filter($queryString);
        
        return response()->json($orders->get());
    }
    
    public function customer(Request $request) {
        
        $request->validate([
            'rows'=>'numeric'
        ]);
        
        $rows = $request->query('rows',10);
        
        $queryString = ['rows'=>$rows];
        
        $customers = DB::table('orders')
                ->selectRaw('SUM(orders.total_amount) AS total_order_amount, COUNT(*) AS number_of_invoices, MAX(orders.created_at) AS last_invoice_date, users.name, customer_profiles.created_at,customer_profiles.gender,customer_profiles.last_login')
                ->join('users','orders.customer_id','=','users.id')
                ->join('customer_profiles','users.id','=','customer_profiles.user_id')
                ->groupBy('orders.customer_id','customer_profiles.created_at','customer_profiles.gender','customer_profiles.last_login');
        
        $register_daterange = $request->query('register_daterange',null);
        $customer_name = $request->query('customer_name',null);
        $gender = $request->query('gender',null);
        $total_amount_from = $request->query('total_amount_from',null);
        $total_amount_to = $request->query('total_amount_to',null);
        $number_of_invoices = $request->query('number_of_invoices',null);
        
        if($register_daterange) {
            $queryString['register_daterange'] = $register_daterange;
            $customers = $customers->whereBetween('customer_profiles.created_at', parseDateRange($register_daterange));
        }
        
        if($customer_name) {
            $queryString['customer_name'] = $customer_name;
            $customers = $customers->where('users.name','LIKE',"%{$customer_name}%");
        }
        
        if($gender) {
            $queryString['gender'] = $gender;
            $customers = $customers->where('customer_profiles.gender',$gender);
        }
        
        if(($total_amount_from>0) && ($total_amount_to>0)) {
            $queryString['total_amount_from'] = $total_amount_from;
            $queryString['total_amount_to'] = $total_amount_to;
            $customers = $customers->havingRaw("SUM(orders.total_amount) BETWEEN $total_amount_from AND $total_amount_to");
        }
        
        if($number_of_invoices) {
            $queryString['number_of_invoices'] = $number_of_invoices;
            $customers = $customers->havingRaw("COUNT(*) >= $number_of_invoices");
        }
        
        return response()->json($customers->get());
    }
    
    public function inventory(Request $request) {
        
        $rows = $request->query('rows',10);
        
        $queryString = ['rows'=>$rows];
        
        $request->validate([
            'rows'=>'numeric'
        ]);
        
        $report_daterange = $request->query('report_daterange',null);
        $product_name = $request->query('product_name',null);
        
        $date_range = [Carbon::now(),Carbon::now()];
        if($report_daterange) {
            $queryString['report_daterange'] = $report_daterange;
            $date_range = parseDateRange($report_daterange);
        }
        
        $excludeOrderStatus = [
            config('ecommerce.order.status.Rejected'),
            config('ecommerce.order.status.Returned'),
            config('ecommerce.order.status.UserCancellation'),
        ];
        $productVariants = DB::table('product_variants')
                ->selectRaw('
                    product_variants.id,
                    products.name,
                    product_variants.size_code,
                    product_variants.initial_balance,
                    COALESCE(soldprior.variant_sold_prior,0) AS soldprior,
                    COALESCE(adjustmentprior.variant_adjustment_prior,0) AS adjustment_prior,
                    (product_variants.initial_balance-COALESCE(soldprior.variant_sold_prior,0)+COALESCE(adjustmentprior.variant_adjustment_prior,0)) AS opening,
                    COALESCE(soldwithin.variant_sold_within,0) AS sold_within,
                    COALESCE(adjustmentwithin.variant_adjustment_within,0) AS adjustment_within,
                    (product_variants.initial_balance-COALESCE(soldprior.variant_sold_prior,0)+COALESCE(adjustmentprior.variant_adjustment_prior,0)-COALESCE(soldwithin.variant_sold_within,0)+COALESCE(adjustmentwithin.variant_adjustment_within,0)) AS closing
                ')
                ->leftJoin(DB::raw("(
                    SELECT order_items.productvariant_id,SUM(qty) AS variant_sold_prior
                    FROM order_items
                    JOIN orders ON order_items.order_id=orders.id
                    WHERE orders.order_status NOT IN (".join(',',$excludeOrderStatus).") AND orders.created_at < '{$date_range[0]->format('Y-m-d')}'
                    GROUP BY productvariant_id
                ) soldprior"),
                'product_variants.id', '=', 'soldprior.productvariant_id')
                ->leftJoin(DB::raw("(
                    SELECT product_variants_id,SUM(IF(method='+',1,-1)* CAST(qty AS SIGNED)) AS variant_adjustment_prior
                    FROM adjustments
                    WHERE created_at < '{$date_range[0]->format('Y-m-d')}'
                    GROUP BY product_variants_id
                ) adjustmentprior"),
                'product_variants.id', '=', 'adjustmentprior.product_variants_id')
                ->leftJoin(DB::raw("(
                    SELECT order_items.productvariant_id,SUM(qty) AS variant_sold_within
                    FROM order_items
                    JOIN orders ON order_items.order_id=orders.id
                    WHERE orders.order_status NOT IN (".join(',',$excludeOrderStatus).") AND orders.created_at BETWEEN '{$date_range[0]->format('Y-m-d')}' AND DATE_ADD('{$date_range[1]->format('Y-m-d')}', INTERVAL 1 DAY)
                    GROUP BY productvariant_id
                ) soldwithin"),
                'product_variants.id', '=', 'soldwithin.productvariant_id')
                ->leftJoin(DB::raw("(
                    SELECT product_variants_id,SUM(IF(method='+',1,-1)* CAST(qty AS SIGNED)) AS variant_adjustment_within
                    FROM adjustments
                    WHERE created_at BETWEEN '{$date_range[0]->format('Y-m-d')}' AND DATE_ADD('{$date_range[1]->format('Y-m-d')}', INTERVAL 1 DAY)
                    GROUP BY product_variants_id
                ) adjustmentwithin"),
                'product_variants.id', '=', 'adjustmentwithin.product_variants_id')
                ->join('products','product_variants.product_id','=','products.id');
                
        if($product_name) {
            $queryString['product_name'] = $product_name;
            $productVariants = $productVariants->where('products.name','LIKE',"%{$product_name}%");
        }
        
        return response()->json($productVariants->get());
    }
}
