<?php

namespace Modules\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use DataTables;
use Illuminate\Support\Facades\Mail;
use Modules\Preorder\Mail\WayBill;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all();
        if ($request->has('status')) {
            $status = config('ecommerce.order.status');
            if (isset($status[$request->status])) {
                $status_id = $status[$request->status];
                $orders = Order::where('order_status', $status_id);
            }
        }

        if ($request->has('invoice')) {
            $invoice = trim($request->invoice);
            
            if (!empty($invoice)) {
                $orders = Order::where('invoice_id','like', '%'.$invoice.'%')
                    ->orWhere('billing_name','like', '%'.$invoice.'%');
            }
        }
        if ($request->ajax()) {
            return DataTables::of($orders)
                ->addColumn('id', function ($query) {
                    $checkbox = '<input type="checkbox" name="id[]" value="' . $query->id . '" />';
                    return $checkbox;
                })
                ->addColumn('order_status', function ($query) {
                    $status = config('ecommerce.order.status');
                    return array_keys($status)[$query->order_status];
                })
                ->addColumn('invoice_id', function ($query) {
                    $link = '<a href="' . route('paid-order.show', $query->id) . '" >';
                    $link .= $query->invoice_id;
                    $link .= '</a>';
                    return $link;
                })
                ->rawColumns(['id', 'invoice_id'])
                ->make(true);
        }
        $data = [
            'title' => 'Transactions'
        ];

        return view('ecommerce::transactions.index', compact('orders', 'data'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'shipping_name',
            'shipping_phone',
            'shipping_address'
        ]);
        $order = Order::findOrFail($id);
        $order->update($request->except('_token', '_method'));
        if (
            $request->has('shipping_tracking_number')  &&
            $order->shipping_tracking_number == $request->shipping_tracking_number
        ) {

            try {
                $send = [
                    'tracking_number' => $order->shipping_tracking_number,
                    'invoice' => $order->invoice_id
                ];
                Mail::to($order->shipping_email)->send(new WayBill($send));
                $order->update([
                    'order_status' => 3
                ]);
            } catch (\Swift_TransportException $e) {
                $response = $e->getMessage();
            }
        }
        return back();
    }
}
