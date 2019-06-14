<?php

namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\Transaction;
use DataTables;
use Validator;

class AllTransactionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Transaction'
        ];
        return view('preorder::all-transaction.index',compact('data'));
    }

    public function show(int $id)
    {
        $transaction   = Transaction::findOrFail($id);
        $orders    = $transaction->orders;   
        $data   = [
            'transaction' => $transaction,
            'orders' => $orders,
            'data' => [
                'title' => $transaction->invoice,
                'back' => route('all-transaction.index')
            ]
        ];
        return view('preorder::all-transaction.show')->with($data);
    }

    public function ajaxAllTransactions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            $transaction = Transaction::with('getProduction');
        }else{
            $transaction = Transaction::with('getProduction')
            ->where('status',$request->status);
        }

        return Datatables::of($transaction)
            ->addColumn('id', function ($data) {
                $checkbox = '<input type="checkbox" name="id[]" value="'.$data->id.'"/>';
                return $checkbox;
            })
            ->addColumn('invoice', function ($data) {
                $link  = '<a href="'.route('all-transaction.show',$data->id).'">';
                $link .= $data->invoice;
                $link .= '</a>';
                return $link;
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('invoice')) {
                    $query->where('transactions.invoice', 'like', "%{$request->get('invoice')}%")
                    ->orWhere('transactions.name','like',"%{$request->get('invoice')}%");
                }

                if ($request->has('date')) {
                    $query->where('getProduction.created_at', 'like', "%{$request->get('date')}%");
                }
            })
            ->rawColumns(['id','invoice'])
            ->make(true);
    }
}
