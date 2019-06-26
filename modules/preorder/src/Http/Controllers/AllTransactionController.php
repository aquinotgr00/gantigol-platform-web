<?php

namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Modules\Preorder\PreOrder;
use Modules\Preorder\Production;
use Modules\Preorder\Transaction;

class AllTransactionController extends Controller
{
    public function index(Request $request)
    {
        $orders = (new Transaction)->newQuery();
        if ($request->has(['startdate', 'enddate'])) {
            //
            $orders = $orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
        }
        $orders->get();

        if ($request->has('status')) {

            $status = trim($request->status);
            if (
                !empty($status) &&
                in_array($status, ['pending', 'paid', 'shipped', 'rejected', 'returned', 'completed'])
            ) {

                $orders = Transaction::where('status', $status);
            }
        }

        if ($request->has('invoice')) {

            $invoice = trim($request->invoice);

            if (!empty($invoice)) {
                $orders = Transaction::where('invoice', 'like', '%' . $invoice . '%')
                    ->orWhere('name', 'like', '%' . $invoice . '%');
            }
        }
        if ($request->ajax()) {
            return DataTables::of($orders)
                ->addColumn('id', function ($query) {
                    $checkbox = '<input type="checkbox" name="id[]" class="rowCheck" value="' . $query->id . '" />';
                    return $checkbox;
                })
                ->addColumn('invoice', function ($query) {
                    $link = '<a href="' . route('all-transaction.show', $query->id) . '" >';
                    $link .= $query->invoice;
                    $link .= '</a>';
                    return $link;
                })
                ->rawColumns(['id', 'invoice'])
                ->make(true);
        }
        $data = [
            'title' => 'Transaction',
        ];
        return view('preorder::all-transaction.index', compact('orders', 'data'));
    }

    public function show(int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $orders = $transaction->orders;
        $status = Transaction::getPossibleEnumValues('status');
        $data = [
            'transaction' => $transaction,
            'orders' => $orders,
            'data' => [
                'title' => $transaction->invoice,
                'back' => route('all-transaction.index'),
            ],
            'status' => $status,
        ];
        return view('preorder::all-transaction.show')->with($data);
    }

    public function ajaxAllTransactions(Request $request)
    {}

    public function update(Request $request, int $id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($request->has('tracking_number')) {

            if ($request->status == 'paid' && $transaction->status != 'paid') {

                $transaction->preOrder->increment('order_received');
                $total = $transaction->preOrder->total;
                foreach ($transaction->orders as $key => $value) {
                    $total += intval($value->qty);
                }
                $preOrder = PreOrder::find($transaction->pre_order_id);
                if (!is_null($preOrder)) {
                    $preOrder->total = $total;
                    $preOrder->update();
                }
            }

            $tracking_number = trim($request->tracking_number);
            if (
                !empty($tracking_number) &&
                $transaction->getProduction->tracking_number != $tracking_number
            ) {
                $production = Production::where('transaction_id', $id)->first();

                $production->update([
                    'tracking_number' => $tracking_number,
                ]);

                try {

                    Mail::to($order->shipping_email)->send(new WayBill($transaction));
                    $order->update([
                        'order_status' => 3,
                    ]);
                } catch (\Swift_TransportException $e) {
                    $response = $e->getMessage();
                }
            }
        } else {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ]);
        }

        $transaction->update($request->except('_token', '_method'));

        return back();
    }

    public function indexCard(Request $request)
    {
        $orders = Transaction::whereIn('status', ['paid', 'completed']);
        $a = $this->revenueNow($orders, $request);
        $b = $this->revenuelast($orders, $request);
        $revenue = $a - $b;
        $data = [
            'percentage' => ($b == 0 ? 100 : ($revenue / $b) * 100),
            'sales' => $a,
        ];
        return $data;
    }

    private function revenueNow($orders, $request)
    {
        if ($request->has(['startdate', 'enddate'])) {
            //
            $orders = $orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
        }
        return $orders->sum('amount');
    }

    private function revenueLast($orders, $request)
    {
        if ($request->has(['startdate', 'enddate'])) {
            //
            $orders = $orders->whereBetween('created_at', [$request->laststartdate, $request->lastenddate]);
        }
        return $orders->sum('amount');
    }
}
