<?php

namespace Modules\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Ecommerce\Order;
use Modules\Preorder\Mail\WayBill;
use Modules\Product\ProductVariant;
use Spatie\Activitylog\Models\Activity;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $orders = (new Order)->newQuery();
        if ($request->has(['startdate', 'enddate'])) {
            //
            $orders = $orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
        }
        $orders->get();

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
                $orders = Order::where('invoice_id', 'like', '%' . $invoice . '%')
                    ->orWhere('billing_name', 'like', '%' . $invoice . '%');
            }
        }
        if ($request->ajax()) {
            return DataTables::of($orders)
                ->addColumn('id', function ($query) {
                    $checkbox = '<input type="checkbox" name="id[]" class="rowCheck" value="' . $query->id . '" />';
                    return $checkbox;
                })
                ->addColumn('order_status', function ($query) {
                    $status = config('ecommerce.order.status');
                    return array_keys($status)[$query->order_status];
                })
                ->addColumn('shipment_name', function ($query) {
                    return strtoupper($query->shipment_name);
                })
                ->addColumn('billing_name', function ($query) {
                    return ucwords($query->billing_name);
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
            'title' => 'Transactions',
        ];

        return view('ecommerce::transactions.index', compact('orders', 'data'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'shipping_name',
            'shipping_phone',
            'shipping_address',
        ]);
        $order = Order::findOrFail($id);
        $tracking_number = trim($request->shipping_tracking_number);

        if ($request->has('order_status')) {
            foreach ($order->items as $value) {
                $productVariant = ProductVariant::find($value->productVariant->id);
                if (!is_null($productVariant)) {

                    $user           = \Auth::user();

                    $repeat_changes = false;

                    if (in_array($request->order_status, [0, 1, 3, 5, 8])) {
                        $method = '-';
                        $stockUpdated = intval($productVariant->quantity_on_hand) - intval($value->qty);
                        if (in_array($order->order_status,[2, 4, 6, 7, 9])) {
                            $repeat_changes = true;
                        }
                    } else {
                        $method = '+';
                        $stockUpdated = intval($productVariant->quantity_on_hand) + intval($value->qty);
                        if (in_array($order->order_status,[0, 1, 3, 5, 8])) {
                            $repeat_changes = true;
                        }
                    }
                    
                    //check log exist
                    $activity = Activity::where('properties->activity', $method)
                        ->where('subject_id', $id)
                        ->orderBy('created_at', 'DESC')
                        ->first();

                    if (is_null($activity)) {
                        activity()
                            ->performedOn($order)
                            ->causedBy($user)
                            ->withProperties([
                                'activity' => $method,
                            ])
                            ->log('Change Order Status');
                        $productVariant->quantity_on_hand = $stockUpdated;
                        $productVariant->update();
                    }

                    if ($repeat_changes) {
                        $productVariant->quantity_on_hand = $stockUpdated;
                        $productVariant->update();
                    }
                }
            }
        }

        if (
            !empty($tracking_number) &&
            $order->shipping_tracking_number != $tracking_number
        ) {

            $order->update([
                'shipping_tracking_number' => $tracking_number
            ]);

            try {
                $send = (object) [
                    'tracking_number' => $order->shipping_tracking_number,
                    'invoice' => $order->invoice_id,
                    'getProduction' => (object) [
                        'tracking_number' => $order->shipping_tracking_number,
                    ],
                    'orders' => (object) $order->items,
                    'courier_name' => $order->shipment_name
                ];
                Mail::to($order->shipping_email)->send(new WayBill($send));
                $order->update([
                    'order_status' => 3,
                ]);
            } catch (\Swift_TransportException $e) {
                $response = $e->getMessage();
            }
        }

        $order->update($request->except('_token', '_method', 'shipping_tracking_number'));

        return back();
    }
}
