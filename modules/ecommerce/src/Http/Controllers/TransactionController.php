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
        $orders = Order::all();
        if ($request->has('status')) {
            $status = config('ecommerce.order.status');
            $status_id = $status[$request->status];
            $orders = Order::where('order_status',$status_id);
        }
        if ($request->ajax()) {
            return DataTables::of($orders)
            ->addColumn('id', function($query){
                $checkbox = '<input type="checkbox" name="id[]" value="'.$query->id.'" />';
                return $checkbox;
            })
            ->addColumn('order_status', function($query){
                $status = config('ecommerce.order.status');
                return array_keys($status)[$query->order_status];
            })
            ->rawColumns(['id'])
            ->make(true);
        }
        $data = [
            'title' => 'Transactions'
        ];

        return view('ecommerce::transactions.index',compact('orders','data'));
    } 
    
}
