<?php

namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\Transaction;
use Modules\Preorder\Production;
use DataTables;
use Validator;

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
            $status = config('ecommerce.order.status');
            if (isset($status[$request->status])) {
                $status_id = $status[$request->status];
                $orders = Transaction::where('status', $status_id);
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
            'title' => 'Transaction'
        ];
        return view('preorder::all-transaction.index', compact('orders','data'));
    }

    public function show(int $id)
    {
        $transaction    = Transaction::findOrFail($id);
        $orders         = $transaction->orders;
        $status         = Transaction::getPossibleEnumValues('status');
        $data           = [
            'transaction' => $transaction,
            'orders' => $orders,
            'data' => [
                'title' => $transaction->invoice,
                'back' => route('all-transaction.index')
            ],
            'status' => $status
        ];
        return view('preorder::all-transaction.show')->with($data);
    }

    public function ajaxAllTransactions(Request $request)
    { }

    public function update(Request $request, int $id)
    {
        if ($request->has('tracking_number')) {

            $request->validate([
                'status' => 'in:pending,paid,shipped,rejected,returned,completed',
            ]);

            $production = Production::where('transaction_id', $id)->first();
            if (!is_null($production)) {
                $production->update([
                    'tracking_number' => $request->tracking_number
                ]);
            }
        } else {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'postal_code' => 'required',
                //'status' => 'in:pending,paid,shipped,rejected,returned,completed',
            ]);
        }

        $transaction = Transaction::findOrFail($id);

        $transaction->update($request->except('_token', '_method'));

        return back();
    }
      public function indexCard(Request $request){
        $orders = Transaction::whereIn('status', ['paid','completed']);
        $a = $this->revenueNow($orders,$request);
        $b = $this->revenuelast($orders,$request);
        $revenue = $a-$b;
        $data= [
                'percentage'=>($b == 0 ? 100 : ($revenue/$b)*100),
                'sales'=>$a
            ];
        return $data;
    }

    private function revenueNow($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
            }
           return $orders->sum('amount');
    }

    private function revenueLast($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->laststartdate, $request->lastenddate]);
            }
           return $orders->sum('amount');
    }
}
