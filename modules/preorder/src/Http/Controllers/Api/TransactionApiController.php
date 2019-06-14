<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\Http\Resources\TransactionResource;
use Modules\Preorder\PreOrdersItems;
use Modules\Preorder\PreOrder;
use Modules\Preorder\Production;
use Modules\Preorder\Transaction;
use Modules\Product\ProductVariant;
use Modules\Preorder\Traits\OrderTrait;
use Validator;

class TransactionApiController extends Controller
{
    use OrderTrait;
    /**
     * get all transaction
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TransactionResource::collection(Transaction::paginate(25));
    }
    /**
     *
     * @param   int  $pre_order_id
     *
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function getPendingByPreorder(int $pre_order_id)
    {
        $preOrder    = PreOrder::find($pre_order_id);
        $transaction = array();
        if (isset($preOrder->transaction)) {
            $transaction = $preOrder->transaction->where('status', 'pending');
            foreach ($preOrder->transaction as $key => $value) {
                $value->orders;
            }
        }
        return new TransactionResource($transaction);
    }
    /**
     *
     * @param   int  $pre_order_id
     *
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function getPaidByPreorder(int $pre_order_id)
    {
        $transaction = Transaction::leftJoin('productions', function ($join) {
            $join->on('transactions.id', '=', 'productions.transaction_id');
        })
        ->select('transactions.*')
        ->whereNull('productions.transaction_id')
        ->where('transactions.status', 'paid')
        ->where('transactions.pre_order_id', $pre_order_id)
        ->paginate(25);
        return new TransactionResource($transaction);
    }
    /**
     *
     * @param   \Modules\Preorder\Transaction  $transaction
     *
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function show(Transaction $transaction)
    {
        return new TransactionResource($transaction);
    }
    /**
     *
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'pre_order_id' => 'required|exists:pre_orders,id',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',//|regex:/(01)[0-9]{9}/
            'quantity' => 'required|numeric',
            'postal_code' => 'required',
            'amount' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return new TransactionResource($validator->messages());
        }
        $quantity = 0;
        $amount = 0;

        if (!is_null($request->items)) {
            foreach ($request->items as $key => $item) {
                $quantity += $item['qty'];
                $amount += $item['subtotal'];
            }
        }
        
        $transaction = Transaction::create(
            array_merge(
                $request->except(['items']),
                [
                    'quantity' => ($quantity > 0) ? $quantity : $request->quantity,
                    'amount' => ($amount > 0) ? $amount : $request->amount,
                    'pre_order_id' => $request->pre_order_id,
                ]
            )
        );
        
        if (
                !is_null($transaction) &&
                isset($transaction->id)
            ) {
            //create schduler
            $this->scheduleReminders(3,$transaction);

            if (class_exists('\Modules\Customers\CustomerProfile')) {
                $new_customer = \Modules\Customers\CustomerProfile::create([
                    'name' => $transaction->name,
                    'email' => $transaction->email,
                    'phone' => $transaction->phone,
                    'address' => $transaction->address,
                    'birthdate' => date('Y-m-d'),
                ]);
            }
        }

        $invoice_id     = str_pad($transaction->id, 5, "0", STR_PAD_LEFT);
        $invoice_parts  = array('INV',date('Y-m-d'),$invoice_id);
        $invoice        = implode('-', $invoice_parts);
        
        $update_transaction = Transaction::find($transaction->id);
        
        if ($update_transaction->count() > 0) {
            $preOrder = PreOrder::find($request->pre_order_id);
            if ($preOrder->count() > 0) {
                $order_received = intval($preOrder->order_received);
                $order_received +=1;

                $preOrder->order_received = $order_received;
                $preOrder->update();
            }

            $update_transaction->invoice =$invoice;
            $update_transaction->update();
        }
        
        if (!is_null($request->items)) {
            foreach ($request->items as $key => $item) {
                $item = array_merge(
                    $item,
                    [
                        'product_id' => $item['product_id'],
                        'transaction_id' => $transaction->id
                    ]
                );
                if (isset($item['product_id']) &&
                        isset($item['price'])
                    ) {
                    
                    $productVariantExist = ProductVariant::find($item['product_id']);
                    
                    if (!is_null($productVariantExist)) {
                        
                        PreOrdersItems::create($item);

                    }
                    

                } else {
                    return new TransactionResource(['errors'=> [
                        'message'=>"item doesn't have product_id",
                        'status'=>'danger'
                    ]]);
                }
            }
        }
        $transaction->orders;
        return new TransactionResource($transaction);
    }
    /**
     * @param \Modules\Preorder\Transaction  $transaction
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function update(Request $request, Transaction $transaction)
    {
        $validator = Validator::make($request->all(), [
            'pre_order_id' => 'required|exists:pre_orders,id',
            'email' => 'email',
            'phone' => 'regex:/(01)[0-9]{9}/',
            'quantity' => 'numeric',
            'amount' => 'numeric',
        ]);
        if ($validator->fails()) {
            return new TransactionResource($validator->messages());
        }
        $transaction->update($request->only([
            'name',
            'email',
            'phone',
            'address',
            'order_price',
            'amount',
        ]));
        return new TransactionResource($transaction);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\TransactionResource
     */
    public function setPaid(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
            'pre_order_id' => 'required|exists:pre_orders,id',
            'status' => 'in:pending',
            'amount' => 'numeric',
        ]);
        if ($validator->fails()) {
            return new TransactionResource($validator->messages());
        }
        $transaction = Transaction::find($request->id);
        $transaction->update([
            'status' => 'paid',
        ]);
        $transaction->orders;
        return new TransactionResource($transaction);
    }

    public function getAll()
    {
        $transaction = Transaction::all();
        foreach($transaction as $key => $value){
            $value->orders;
        }
        return new TransactionResource($transaction);
    }
}
