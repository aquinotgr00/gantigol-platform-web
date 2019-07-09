<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Customers\CustomerProfile;
use Modules\Membership\Member;
use Modules\Preorder\Http\Resources\TransactionResource;
use Modules\Preorder\Jobs\PaymentReminder;
use Modules\Preorder\PreOrder;
use Modules\Preorder\PreOrdersItems;
use Modules\Preorder\SettingReminder;
use Modules\Preorder\Traits\OrderTrait;
use Modules\Preorder\Transaction;
use Modules\Product\ProductVariant;
use Modules\Preorder\Mail\InvoiceOrder;
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
        $transaction = Transaction::where('pre_order_id', $pre_order_id)
            ->where('status', 'pending')
            ->get();
        return Datatables::of($transaction)
            ->addColumn('created_at', function ($data) {
                return date_format($data->created_at, 'Y-m-d');
            })
            ->addColumn('invoice', function ($data) {
                return '<a href="' . route('all-transaction.show', $data->id) . '">' . $data->invoice . '</a>';
            })
            ->addColumn('variant_qty', function ($data) {
                $variant_qty = '';
                $variant_qty_items = [];
                foreach ($data->orders as $key => $value) {
                    $variant_qty_items[$value->productVariant->variant][] = $value->qty;
                }

                foreach ($variant_qty_items as $label => $item) {
                    $variant_qty .= ucwords($label) . ' : ';
                    $variant_qty .= array_sum($item);
                    $variant_qty .= '<br/>';
                }
                return $variant_qty;
            })
            ->addColumn('email_received', function ($data) {
                $reminder = '';
                for ($i = 0; $i < $data->payment_reminder; $i++) {
                    $reminder .= '<img class="alert-pre" src="' . asset('vendor/admin/images/alert-' . $i . '.svg') . '" alt="indicator reminder"></a>';
                }
                return $reminder;
            })
            ->rawColumns(['invoice', 'variant_qty', 'email_received'])
            ->toJson();
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
            ->get();

        return Datatables::of($transaction)
            ->addColumn('created_at', function ($data) {
                return date_format($data->created_at, 'Y-m-d');
            })
            ->addColumn('invoice', function ($data) {
                return '<a href="' . route('all-transaction.show', $data->id) . '">' . $data->invoice . '</a>';
            })
            ->addColumn('variant_qty', function ($data) {
                $variant_qty = '';
                $variant_qty_items = [];
                foreach ($data->orders as $key => $value) {
                    $variant_qty_items[$value->productVariant->variant][] = $value->qty;
                }

                foreach ($variant_qty_items as $label => $item) {
                    $variant_qty .= ucwords($label) . ' : ';
                    $variant_qty .= array_sum($item);
                    $variant_qty .= '<br/>';
                }
                return $variant_qty;
            })
            ->rawColumns(['invoice', 'variant_qty', 'email_received'])
            ->toJson();
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
            'courier_fee' => 'required|numeric',
            'courier_name' => 'required',
        ]);

        if ($validator->fails()) {
            return new TransactionResource($validator->messages());
        }

        $settingReminder = SettingReminder::first();
        $repeat = (isset($settingReminder->repeat)) ? intval($settingReminder->repeat) : 3;
        $interval = (isset($settingReminder->interval)) ? intval($settingReminder->interval) : 8;
        $hour = $repeat * $interval;
        $start = date('Y-m-d');

        $payment_duedate = date('Y-m-d h:is', strtotime('+' . $hour . ' hour', strtotime($start)));

        $transaction = Transaction::create(
            array_merge(
                $request->except(['items']),
                [
                    'quantity' => 0,
                    'amount' => 0,
                    'pre_order_id' => $request->pre_order_id,
                    'customer_id' => 0,
                    'payment_duedate' => $payment_duedate,
                ]
            )
        );

        if (
            !is_null($transaction) &&
            isset($transaction->id)
        ) {
            $customer_id = null;
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
                            'birthdate' => date('Y-m-d'),
                            'subdistrict_id' => $request->subdistrict_id,
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
                        'subdistrict_id' => $request->subdistrict_id,
                    ]
                );
                $customer_id = $customer->id;
            }
            $transaction_id = Transaction::whereDate('created_at',\Carbon\Carbon::today())->count();
            ++$transaction_id;
            $invoice_id     = str_pad($transaction_id, 5, "0", STR_PAD_LEFT);
            $invoice_parts = array('INV', date('Y-m-d'), $invoice_id);
            $invoice = implode('-', $invoice_parts);
            $transaction->update([
                'invoice' => $invoice,
                'customer_id' => $customer_id,
            ]);
        }

        $quantity = 0;
        $amount = 0;

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
                            'subtotal' => $subtotal,
                        ]);
                    }
                } else {
                    return new TransactionResource(['errors' => [
                        'message' => "item doesn't have product_id",
                        'status' => 'danger',
                    ]]);
                    break;
                }
            }

            $preOrder = PreOrder::find($request->pre_order_id);

            if (!is_null($preOrder)) {
                $total = intval($preOrder->total);
                $total += intval($quantity);

                $preOrder->total = $total;
                $preOrder->update();
                
                if ($preOrder->total >= $preOrder->quota) {
                    event(new \Modules\Preorder\Events\QuotaFulfilled($preOrder));
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
                    'discount' => $request->discount,
                ]);
            } else {
                $transaction->update([
                    'amount' => $amount,
                    'quantity' => $quantity,
                ]);
            }

            //create schduler

            //$this->scheduleReminders($repeat, $transaction);
            $invoice = [
                'billing_name' => (isset($transaction->customer->name)) ? $transaction->customer->name : '',
                'billing_address' => (isset($transaction->customer->address)) ? $transaction->customer->address : '',
                'billing_phone' => (isset($transaction->customer->email)) ? $transaction->customer->email : '',
                'billing_contact' => (isset($transaction->customer->phone)) ? $transaction->customer->phone : '',
                'shipping_name' => $transaction->name,
                'shipping_address' => $transaction->address,
                'shipping_contact' => $transaction->phone,
                'shipping_phone' => $transaction->phone,
                'shipping_courier' => $transaction->courier_name,
                'shipping_cost' => $transaction->courier_fee,
                'net_total' => $transaction->net_total,
                'discount' => $transaction->discount,
                'gross_total' => $transaction->amount,
                'invoice' => $transaction->invoice,
                'orders' => $transaction->orders,
            ];

            try {

                Mail::to($transaction->customer->email)->send(new InvoiceOrder($invoice));
                
                $settingReminder = SettingReminder::first();
                $interval   = (!is_null($settingReminder)) ? $settingReminder->interval : 6;
                $repeat     = (!is_null($settingReminder)) ? $settingReminder->repeat : 3;
                $interval   = $interval * 60;
                for ($i=1; $i <= $repeat; $i++) { 
                    $interval = $i * $interval;
                    dispatch(new PaymentReminder($transaction))->delay(now()->addMinutes($interval));
                }
                
            } catch (Exception $ex) {
                error_log($ex);
            }
        }
        $transaction->orders;
        foreach ($transaction->orders as $key => $value) {
            $value->productVariant;
            $value->productVariant->product;
        }
        if (isset($transaction->getSubdistrict)) {
            $transaction->getSubdistrict;
        }

        $names = preg_split('/\s+/', $transaction->name);
        $last_name = '';

        foreach ($names as $key => $value) {
            if ($key != 0) {
                $last_name .= ' ' . $value;
            }
        }

        $item_details = [];

        foreach ($transaction->orders as $key => $value) {

            $item_details[] = [
                'id' => $value->id,
                'name' => $value->productVariant->name,
                'quantity' => $value->qty,
                'price' => $value->price,
                'subtotal' => $value->subtotal,
            ];
        }
        $addtional = [
            [
                'id' => $request->courier_name . '1',
                'name' => $request->courier_name,
                'quantity' => 1,
                'price' => $transaction->courier_fee,
                'subtotal' => $transaction->courier_fee,
            ],
            [
                'id' => $transaction->discount . '1',
                'name' => 'Discount',
                'quantity' => 1,
                'price' => (is_null($transaction->discount)) ? 0 : intval(-$transaction->discount),
                'subtotal' => (is_null($transaction->discount)) ? 0 : intval(-$transaction->discount),
            ],
        ];

        $item_details = array_merge($item_details, $addtional);

        $invoice = [
            'transaction_details' => [
                'order_id' => $transaction->invoice,
                'gross_amount' => $transaction->amount,
            ],
            'customer_details' => [
                'first_name' => $names[0],
                'last_name' => $last_name,
                'email' => $transaction->email,
                'phone' => $transaction->phone,
                'billing_address' => $transaction->address,
                'shipping_address' => $transaction->address,
            ],
            'item_details' => $item_details,
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
