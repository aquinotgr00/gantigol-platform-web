<?php

namespace Modules\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use DataTables;
use DB;

class PaidOrderController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('order_items')
            ->selectRaw('
                orders.id,
                orders.created_at,
                orders.invoice_id,
                orders.billing_name,
                orders.billing_email,
                orders.billing_phone,
                orders.order_status,
                orders.shipping_name,
                orders.shipping_tracking_number,
                GROUP_CONCAT(product_variants.sku) AS order_item_sku
            ')
            ->join('product_variants','order_items.productvariant_id','=','product_variants.id')
            ->join('orders','order_items.order_id','=','orders.id')
            ->groupBy('order_items.order_id');

        if($request->has('daterange')) {
            $date_range = parseDateRange($request->daterange);
            $query = $query->whereBetween('orders.created_at', $date_range);
        }

        $query = $query->where('orders.order_status', config('ecommerce.order.status.Paid'));

        if (request()->ajax()) {
            return DataTables::of($query)
            ->orderColumn('orders.created_at', '-orders.created_at $1')
            ->addColumn('shipping_tracking_number', function($query){
                $input = '<input type="text" name="shipping_tracking_number[]" class="form-control" value="'.$query->shipping_tracking_number.'"/>';
                return $input;
            })
            ->addColumn('action', function($query){
                return "<a href='".route('paid-order.show', ['id' => $query->id]) ."' class='btn btn-sm btn-default btn-block' role='button' title='iew'>View</a>";
            })
            ->filterColumn('order_item_sku', function($query, $keyword) {
                $query->whereRaw("product_variants.sku like ?", ["%{$keyword}%"]);
            })
            ->filterColumn('invoice_id', function($query, $invoice_id) {
                $query->where("orders.invoice_id", $invoice_id)
                ->orWhere("orders.billing_name",$invoice_id);
            })
            ->rawColumns(['shipping_tracking_number','action'])
            ->make(true);
        }
        
        $orders = $query->get();
        $data = [
            'title' => 'Paid Order'
        ];

        return view('ecommerce::orders.index',compact('orders','data'));
    }

    public function show(int $id)
    {
        $order = Order::findOrFail($id);
        return view('ecommerce::orders.show',compact('order'));
    }
}
