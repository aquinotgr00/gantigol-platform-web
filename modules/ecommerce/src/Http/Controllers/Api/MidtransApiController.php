<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Ecommerce\Mail\PaymentExpire;
use Modules\Ecommerce\Mail\PaymentSuccess;
use Modules\Ecommerce\Order;
use Modules\Preorder\PreOrder;
use Modules\Preorder\Transaction;
use Modules\Product\ProductVariant;

class MidtransApiController extends Controller
{
    /**
     * The resource model for this controller.
     *
     * @var object
     */
    protected $transaction;

    protected $order;

    public function __construct(
        Transaction $transaction,
        Order $order
    ) {
        $this->transaction = $transaction;
        $this->order = $order;
    }

    public function paymentNotification(Request $request)
    {

        $result = $request->json()->all();

        switch ($result['transaction_status']) {
            case 'settlement':

                $transaction = $this->transaction->where('invoice', $result['order_id'])->first();
                $order = $this->order->where('invoice_id', $result['order_id'])->first();

                if (!is_null($transaction)) {

                    $transaction->preOrder->increment('order_received');

                    $transaction->update(['status' => 'paid']);

                    $total = $transaction->preOrder->total;
                    foreach ($transaction->orders as $key => $value) {
                        $total += intval($value->qty);
                    }

                    $preOrder = PreOrder::find($transaction->pre_order_id);

                    if (!is_null($preOrder)) {
                        $preOrder->total = $total;
                        $preOrder->update();
                    }

                    if ($transaction->preOrder->total >= $transaction->preOrder->quota) {
                        try {
                            event(new \Modules\Preorder\Events\QuotaFulfilled($transaction->preOrder));
                        } catch (\Throwable $th) {
                            error_log($th);
                        }
                    }

                    Mail::to($transaction->email)->send(new PaymentSuccess($transaction));
                } elseif (!is_null($order)) {

                    $order->update(['order_status' => 1]);

                    foreach ($order->items as $key => $value) {

                        $updateVariant = ProductVariant::find($value->productvariant_id);

                        if (!is_null($updateVariant)) {

                            $quantity_on_hand = intval($updateVariant->quantity_on_hand) - intval($value->qty);

                            $updateVariant->update([
                                'quantity_on_hand' => $quantity_on_hand,
                            ]);
                        }
                    }
                    $transaction = (object) [
                        'invoice' => $order->invoice_id,
                        'created_at' => $order->created_at,
                        'amount' => $order->total_amount,
                    ];
                    Mail::to($order->billing_email)->send(new PaymentSuccess($transaction));
                }
                break;
            case 'expire':

                $transaction = $this->transaction->where('invoice', $result['order_id'])->first();
                $order = $this->order->where('invoice_id', $result['order_id'])->first();

                if (!is_null($transaction)) {
                    Mail::to($transaction->email)->send(new PaymentExpire($transaction));
                } elseif (!is_null($order)) {
                    $transaction = (object) [
                        'invoice' => $order->invoice_id,
                        'created_at' => $order->created_at,
                        'amount' => $order->total_amount,
                    ];

                    Mail::to($order->billing_email)->send(new PaymentExpire($transaction));

                    foreach ($order->items as $key => $value) {
                        $productVariant = ProductVariant::find($value->productVariant->id);
                        if (!is_null($productVariant)) {
                            $stockAdded = intval($productVariant->quantity_on_hand) + intval($value->qty);
                            $productVariant->quantity_on_hand = $stockAdded;
                            $productVariant->update();
                        }
                    }
                }
                break;
        }
    }

    public function paymentFinish(Request $request)
    {
        return redirect('http://fe-staging-gantigol-public.blm.solutions/#/thank-you');
    }

    public function paymentUnfinish(Request $request)
    {
        return response()->json($request->json()->all());
    }

    public function paymentError(Request $request)
    {
        return response()->json($request->json()->all());
    }
}
