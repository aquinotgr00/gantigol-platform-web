<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Preorder\Http\Resources\TransactionResource;
use Modules\Preorder\PreOrdersItems;
use Modules\Preorder\PreOrder;
use Modules\Preorder\SettingReminder;
use Modules\Preorder\Transaction;
use Modules\Product\ProductVariant;
use Modules\Preorder\Traits\OrderTrait;
use Modules\Customers\CustomerProfile;
use Modules\Membership\Member;
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
            'phone' => 'required', //|regex:/(01)[0-9]{9}/
            'postal_code' => 'required',
            'subdistrict_id' => 'required',
            'courier_fee' => 'required'
        ]);

        if ($validator->fails()) {
            return new TransactionResource($validator->messages());
        }

        $transaction = Transaction::create(
            array_merge(
                $request->except(['items']),
                [
                    'quantity' => 0,
                    'amount' => 0,
                    'pre_order_id' => $request->pre_order_id,
                    'customer_id' => 0
                ]
            )
        );

        if (
            !is_null($transaction) &&
            isset($transaction->id)
        ) {
            $customer_id = NULL;
            if ($request->has('user_id')) {

                $member = Member::find($request->user_id);
                if (!is_null($member)) {
                    $customer = CustomerProfile::firstOrCreate(
                        ['user_id' => $member->id],
                        [
                            'name' => $member->name,
                            'email' => $member->email,
                            'phone' => $member->phone,
                            'address' => $member->address,
                            'birthdate' => date('Y-m-d')
                        ]
                    );
                    $customer_id = $customer->id;
                }

            } else {
                $customer = CustomerProfile::firstOrCreate(
                    ['email' => $request->email],
                    [
                        'name' => $transaction->name,
                        'email' => $transaction->email,
                        'phone' => $transaction->phone,
                        'address' => $transaction->address,
                        'birthdate' => date('Y-m-d'),
                    ]
                );
                $customer_id = $customer->id;
            }

            $invoice_id     = str_pad($transaction->id, 5, "0", STR_PAD_LEFT);
            $invoice_parts  = array('INV', date('Y-m-d'), $invoice_id);
            $invoice        = implode('-', $invoice_parts);
            $transaction->update([
                'invoice' => $invoice,
                'customer_id' => $customer_id
            ]);
        }

        $quantity   = 0;
        $amount     = 0;

        if (!is_null($request->items)) {
            $amount = 0;
            foreach ($request->items as $key => $item) {
                if (
                    isset($item['product_id']) &&
                    isset($item['qty'])
                ) {

                    $productVariant = ProductVariant::find($item['product_id']);

                    if (!is_null($productVariant)) {

                        $price = $productVariant->product->price;
                        if ($productVariant->price > 0) {
                            $price = $productVariant->price;
                        }

                        $subtotal = intval($item['qty']) * intval($price);
                        $amount += $subtotal;
                        $quantity += intval($item['qty']);
                        PreOrdersItems::create([
                            'transaction_id' => $transaction->id,
                            'product_id' => $productVariant->id,
                            'model' => $productVariant->variant,
                            'qty' => $item['qty'],
                            'price' => $price,
                            'subtotal' => $subtotal
                        ]);
                    }
                } else {
                    return new TransactionResource(['errors' => [
                        'message' => "item doesn't have product_id",
                        'status' => 'danger'
                    ]]);
                    break;
                }
            }

            $amount += intval($request->courier_fee);

            if (
                $request->has('discount') &&
                $request->discount > 0
            ) {
                $amount -= intval($request->discount);
                $transaction->update([
                    'amount' => $amount,
                    'quantity' => $quantity,
                    'discount' => $request->discount
                ]);
            } else {
                $transaction->update([
                    'amount' => $amount,
                    'quantity' => $quantity
                ]);
            }

            //create schduler
            $settingReminder    =  SettingReminder::first();
            $repeat             = (isset($settingReminder->repeat)) ? $settingReminder->repeat : 3;

            $this->scheduleReminders($repeat, $transaction);
        }
        $transaction->orders;
        foreach ($transaction->orders as $key => $value) {
            $value->productVariant;
            $value->productVariant->product;
        }
        if (isset($transaction->getSubdistrict)) {
            $transaction->getSubdistrict;
        }

        $names      = preg_split('/\s+/', $transaction->name);
        $last_name  = '';

        foreach ($names as $key => $value) {
            if ($key != 0) {
                $last_name .= ' ' . $value;
            }
        }
        $invoice = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->amount
            ],
            'customer_details' => [
                'first_name' => $names[0],
                'last_name'  => $last_name,
                'email' => $transaction->email,
                'phone' => $transaction->phone,
                'billing_address' => $transaction->address,
                'shipping_address' => $transaction->address
            ],
            'item_details' => (isset($transaction->orders)) ? $transaction->orders : []
        ];

        return new TransactionResource($invoice);
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
        if (!is_null($transaction)) {
            $preOrder = PreOrder::find($transaction->pre_order_id);
            if (!is_null($preOrder)) {
                $order_received = intval($preOrder->order_received);
                $order_received += 1;

                $preOrder->order_received = $order_received;
                $preOrder->update();
            }

            $transaction->update([
                'status' => 'paid',
            ]);
        }
        $transaction->orders;
        return new TransactionResource($transaction);
    }

    public function getAll()
    {
        $transaction = Transaction::all();
        foreach ($transaction as $key => $value) {
            $value->orders;
        }
        return new TransactionResource($transaction);
    }
}
