<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\Jobs\BulkPaymentReminder;

use Modules\Preorder\PreOrder;
use Modules\Preorder\ProductionBatch;
use Modules\Preorder\Transaction;
use Modules\Preorder\Production;

use PDF; 

class TransactionController extends Controller
{
    /**
     * [pending description]
     *
     * @param   int  $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pending(int $id)
    {
        $preOrder = PreOrder::findOrFail($id);
        return view('preorder::transaction.index')->with('preOrder', $preOrder);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function paid(int $id)
    {
        $preOrder = PreOrder::findOrFail($id);
        return view('preorder::transaction.paid')->with('preOrder', $preOrder);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function batch(int $id)
    {
        $preOrder   = PreOrder::findOrFail($id);
        $data = [
            'preOrder' => $preOrder
        ];
        return view('preorder::transaction.batch')->with($data);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shipping(int $id)
    {
        $production_batch = ProductionBatch::findOrFail($id);
        $production_batch->getProductions;
        foreach ($production_batch->getProductions as $key => $value) {
            $value->getTransaction;
            $value->getTransaction->orders;
        }
        $production_json  = json_encode($production_batch);
        $data = [
            'preOrder' => $production_batch->preOrder,
            'production_json' => $production_json,
            'production_batch' => $production_batch,
            'data' => [
                'title' => ucwords('Batch '.$production_batch->batch_name),
                'back' => route('pending.transaction',$production_batch->pre_order_id)
            ]
        ];
        return view('preorder::transaction.shipping')->with($data);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shippingEdit(int $id)
    {
        $production_batch = ProductionBatch::findOrFail($id);
        $production_batch->getProductions;
        foreach ($production_batch->getProductions as $key => $value) {
            $value->getTransaction;
            $value->getTransaction->orders;
        }
        $production_json  = json_encode($production_batch);
        $data = [
            'preOrder' => $production_batch->preOrder,
            'production_json' => $production_json,
            'production_batch' => $production_batch,
            'data' => [
                'title' => ucwords('batch '.$production_batch->batch_name),
                'back' => route('shipping.transaction',$production_batch->id)
            ],
            'status' => [
                'pending' => 'Pending',
                'proceed' => 'On Progress',
                'ready_to_ship' =>'Ready To Ship',
                'shipped' => 'Shipped'
            ]
        ];
        return view('preorder::transaction.shipping-edit')->with($data);
    }
    /**
     *
     * @param   Request  $request
     * @param   int      $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showTransaction(Request $request, int $id)
    {
        $request->validate([
            'preorder' => 'required|exists:pre_orders,id'
        ]);
        $transaction   = Transaction::findOrFail($id);
        $orders    = $transaction->orders;
        $preOrder  = PreOrder::find($request->preorder);
        $data   = [
            'transaction' => $transaction,
            'product' => $preOrder->product,
            'orders' => $orders,
            'data' => [
                'title' => $transaction->invoice,
                'back' => route('pending.transaction',$preOrder->id)
            ]
        ];
        return view('preorder::transaction.show')->with($data);
    }

    public function sendReminder(int $id)
    {
        BulkPaymentReminder::dispatch();
        //->delay(now()->addMinutes(10));
        return redirect()->route('pending.transaction', $id);
    }

    public function printShippingSticker(int $batch_id)
    {
        $production =  Production::where('production_batch_id',$batch_id)->get();
        $data = [
            'production' => $production
        ];
        return PDF::setOptions(['defaultFont' => 'sans-serif'])
        ->setPaper('a4', 'landscape')
        ->loadView('preorder::shipping.sticker',$data)
        ->stream('shipping-sticker.pdf');
    }
}
