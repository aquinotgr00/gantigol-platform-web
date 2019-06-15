<?php

namespace Modules\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use DataTables;
use DB;

class TransactionController extends Controller
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
                    orders.shipping_name
                ')
                ->join('orders','order_items.order_id','=','orders.id')
                ->groupBy('order_items.order_id');
        
        if($request->has('daterange')) {
            $date_range = parseDateRange($request->daterange);
            $query = $query->whereBetween('orders.created_at', $date_range);
        }
        
        if($request->has('status')) {
            $status_id = config('ecommerce.order.status')[$request->status];
            $query = $query->where('orders.order_status',$status_id);
        }
        else {
            $query = $query->where('orders.order_status','<>',config('ecommerce.order.status.UserCancellation'));
        }
        
        if (request()->ajax()) {
            

            return DataTables::of($query)
                ->orderColumn('orders.created_at', '-orders.created_at $1')
                ->addColumn('status', function($query){
                    return array_keys(config('ecommerce.order.status'))[$query->order_status];
                })
                ->filterColumn('invoice_id', function($query, $invoice_id) {
                    $query->where("orders.invoice_id", $invoice_id)
                    ->orWhere("orders.billing_name",$invoice_id);
                })
                ->make(true);
        }
        $orders = $query->get();
        
        $data = [
            'title' => 'Transactions'
        ];

        return view('ecommerce::transactions.index',compact('orders','data'));
    } 
    
}
