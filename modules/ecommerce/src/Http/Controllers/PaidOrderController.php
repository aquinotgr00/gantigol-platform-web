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
        if ($request->ajax()) {
            
            $orders = Order::where('order_status','!=', 0);
            if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
            }
            if ($request->has('invoice')) {
                $invoice = trim($request->invoice);
                
                if (!empty($invoice)) {
                    $orders = Order::where('invoice_id','like', '%'.$invoice.'%')
                        ->orWhere('billing_name','like', '%'.$invoice.'%');
                    $orders = $orders->where('order_status','!=', 0);
                }
            }
            return DataTables::of($orders)
                ->addColumn('id', function ($query) {
                    $checkbox = '<input type="checkbox" name="id[]" value="' . $query->id . '" />';
                    return $checkbox;
                })
                ->addColumn('order_status', function ($query) {
                    $status = config('ecommerce.order.status');
                    return array_keys($status)[$query->order_status];
                })
                /*->addColumn('shipping_tracking_number', function ($query) {
                    $input = '<input type="text" name="shipping_tracking_number[]" class="form-control" value="' . $query->shipping_tracking_number . '"/>';
                    return $input;
                })*/
                ->addColumn('invoice_id', function ($query) {
                    $link = '<a href="'.route('paid-order.show',$query->id).'" >';
                    $link .= $query->invoice_id;
                    $link .= '</a>';
                    return $link;
                })
                ->rawColumns(['id', 'shipping_tracking_number','invoice_id'])
                ->make(true);
        }

        $data = [
            'title' => 'Paid Order'
        ];

        return view('ecommerce::orders.index', compact('orders', 'data'));
    }

    public function show(int $id)
    {
        $order  = Order::findOrFail($id);
        $status = config('ecommerce.order.status','ecommerce');
        $desc   = config('ecommerce.order.desc','ecommerce');

        return view('ecommerce::orders.show', compact('order','status','desc'));
    }
}
