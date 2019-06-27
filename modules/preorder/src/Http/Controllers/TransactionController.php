<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Preorder\Jobs\BulkPaymentReminder;
use Modules\Preorder\Mail\WayBill;
use Modules\Preorder\PreOrder;
use Modules\Preorder\Production;
use Modules\Preorder\ProductionBatch;
use Modules\Preorder\Transaction;
use PDF;
use Auth;

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
        $this->authorize('view-transaction', Auth::user());
        $preOrder           = PreOrder::findOrFail($id);
        $summary_order      = [];
        $total_order        = 0;
        foreach ($preOrder->transaction->where('status', 'pending') as $key => $value) {
            foreach ($value->orders as $index => $data) {
                $total_order += intval($data->qty);
                $summary_order[$data->productVariant->variant][] = $data->qty;
            }
        }

        $summary_order_paid = [];
        $total_order_paid   = 0;

        foreach ($preOrder->transaction->where('status', 'paid') as $key => $value) {
            if (is_null($value->getProduction)) {
                foreach ($value->orders as $index => $data) {
                    $total_order_paid += intval($data->qty);
                    $summary_order_paid[$data->productVariant->variant][] = $data->qty;
                }
            }
        }

        $summary_order_batch = [];
        $total_order_batch   = 0;
        $batchPreorder = ProductionBatch::where('pre_order_id', $id)->get();

        foreach ($batchPreorder as $key => $value) {

            foreach ($value->getProductions as $key => $value) {

                foreach ($value->getTransaction->orders as $index => $data) {
                    $total_order_batch += intval($data->qty);
                    $summary_order_batch[$data->productVariant->variant][] = $data->qty;
                }
            }
        }

        return view('preorder::transaction.index')->with([
            'preOrder' => $preOrder,
            'data' => [
                'title' => $preOrder->product->name,
                'back' => route('list-preorder.index')
            ],
            'total_order' => $total_order,
            'summary_order' => $summary_order,
            'total_order_paid' => $total_order_paid,
            'summary_order_paid' => $summary_order_paid,
            'total_order_batch' => $total_order_batch,
            'summary_order_batch' => $summary_order_batch,
        ]);
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
        $this->authorize('view-batch', Auth::user());
        $preOrder = PreOrder::findOrFail($id);
        $data = [
            'preOrder' => $preOrder,
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
        $this->authorize('view-transaction', Auth::user());
        $production_batch = ProductionBatch::findOrFail($id);
        $summary_order_batch = [];
        $total_order_batch   = 0;
        foreach ($production_batch->getProductions as $key => $value) {
            foreach ($value->getTransaction->orders as $index => $data) {
                $total_order_batch += intval($data->qty);
                $summary_order_batch[$data->productVariant->variant][] = $data->qty;
            }
        }
        
        $data = [
            'production_batch' => $production_batch,
            'data' => [
                'title' => ucwords('Batch ' . $production_batch->batch_name),
                'back' => route('pending.transaction', $production_batch->pre_order_id),
            ],
            'summary_order_batch' => $summary_order_batch,
            'total_order_batch' => $total_order_batch
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
            foreach ($value->getTransaction->orders as $index => $order) {
                $order->productVariant;
            }
        }
        $production_json = json_encode($production_batch);
        $data = [
            'preOrder' => $production_batch->preOrder,
            'production_json' => $production_json,
            'production_batch' => $production_batch,
            'data' => [
                'title' => ucwords('batch ' . $production_batch->batch_name),
                'back' => route('shipping.transaction', $production_batch->id),
            ],
            'status' => [
                'pending' => 'Pending',
                'proceed' => 'On Progress',
                'ready_to_ship' => 'Ready To Ship',
                'shipped' => 'Shipped',
            ],
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
            'preorder' => 'required|exists:pre_orders,id',
        ]);
        $transaction = Transaction::findOrFail($id);
        $status = Transaction::getPossibleEnumValues('status');
        $orders = $transaction->orders;
        $preOrder = PreOrder::find($request->preorder);
        $data = [
            'transaction' => $transaction,
            'product' => $preOrder->product,
            'orders' => $orders,
            'data' => [
                'title' => $transaction->invoice,
                'back' => route('pending.transaction', $preOrder->id),
            ],
            'status' => $status,
        ];

        return view('preorder::all-transaction.show')->with($data);
    }

    public function sendReminder(int $id)
    {
        BulkPaymentReminder::dispatch();
        //->delay(now()->addMinutes(10));
        return redirect()->route('pending.transaction', $id);
    }

    public function printShippingSticker(int $batch_id)
    {
        $production = Production::where('production_batch_id', $batch_id)->get();
        $data = [
            'production' => $production,
        ];
        return PDF::setOptions(['defaultFont' => 'sans-serif'])
            ->setPaper('a4', 'landscape')
            ->loadView('preorder::shipping.sticker', $data)
            ->stream('shipping-sticker.pdf');
    }

    public function storeShippingNumber(Request $request)
    {
        $request->validate([
            'batch_id' => 'required',
            'tracking_number' => 'array',
            'production_id' => 'array',
        ]);

        foreach ($request->production_id as $key => $value) {
            $production = Production::find($value);
            $tracking_number = trim($request->tracking_number[$key]);
            if (
                !is_null($production) &&
                !empty($tracking_number)
            ) {

                $transaction = Transaction::find($production->transaction_id);
                if (!is_null($transaction)) {
                    $transaction->update([
                        'status' => 'shipped',
                    ]);
                }

                try {
                    $production->update([
                        'tracking_number' => $tracking_number,
                        'status' => 'shipped',
                    ]);

                    Mail::to($production->getTransaction->email)->send(new WayBill($transaction));
                } catch (\Swift_TransportException $e) {
                    $response = $e->getMessage();

                    break;
                }
            }
        }

        return back();
    }

    public function getShippingDatatables(int $batch_id)
    {
        $production_batch = ProductionBatch::find($batch_id);
        $production = $production_batch->getProductions;
        return Datatables::of($production)
            ->addColumn('created_at', function ($data) {
                return date_format($data->created_at, 'Y-m-d');
            })
            ->addColumn('invoice', function ($data) {

                return '<a href="' . route('all-transaction.show', $data->getTransaction->id) . '">' . $data->getTransaction->invoice . '</a>';
            })
            ->addColumn('variant_qty', function ($data) {
                $variant_qty = '';
                $variant_qty_items = [];
                foreach ($data->getTransaction->orders as $key => $value) {
                    $variant_qty_items[$value->productVariant->variant][] = $value->qty;
                }

                foreach ($variant_qty_items as $label => $item) {
                    $variant_qty .= ucwords($label) . ' : ';
                    $variant_qty .= array_sum($item);
                    $variant_qty .= '<br/>';
                }
                return $variant_qty;
            })
            ->addColumn('courier_name', function ($data) {
                $input = '<input type="text" name="courier_name[]"';
                $input .= ' onclick="showModalCourier(this)" ';
                $input .= ' class="form-control form-table form-success"';
                $input .= ' id="' . $data->id . '"';
                $input .= ' data-fee="' . $data->getTransaction->courier_fee . '"';
                $input .= ' data-type="' . $data->getTransaction->courier_type . '"';
                $input .= ' placeholder="' . strtoupper($data->getTransaction->courier_name) . '" />';
                return $input;
            })
            ->addColumn('tracking_number', function ($data) {
                $input = '<div class="input-group-append">';
                $input .= "<input type='hidden' value='" . $data->id . "' name='production_id[]' />";
                $input .= '<input type="text" name="tracking_number[]" class="form-control form-table form-success" id="' . $data->id . '" placeholder="' . $data->tracking_number . '">';
                $input .= '<button class="btn btn-tbl" id="btn-tbl-' . $data->id . '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Submit" style="display:none;">';
                $input .= '</button></div>';
                return $input;
            })
            ->addColumn('name', function ($data) {
                return ucwords($data->getTransaction->name);
            })
            ->addColumn('status', function ($data) {
                return strtoupper($data->status);
            })
            ->rawColumns(['invoice', 'variant_qty', 'courier_name', 'tracking_number'])
            ->toJson();
    }
}
