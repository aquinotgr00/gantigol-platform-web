<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use Modules\Ecommerce\OrderItem;
use Modules\Product\ProductVariant;
use Carbon\Carbon;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $excludeOrderStatus = [config('starcross.order.status.UserCancellation')];
        return Order::with('items.productVariant')->whereNotIn('order_status', $excludeOrderStatus)->where('customer_id', $request->user()->id)->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        // stock deduction
        $items = collect($request->input('items'))->map(function ($item) {
            $quantity = $item['qty'];
            $price = (int) $item['price'];
            $discount = $item['discount'];
            $discountId = $item['discountId'];
            $productVariant = ProductVariant::with('product')->find((int) $item['id']);
            $productVariant->quantity_on_hand -= $quantity;

            try {
                $productVariant->save();
            } catch (\Illuminate\Database\QueryException $e) {
                DB::rollback();
                $productVariant->quantity_on_hand += $quantity;
                // 462 : insufficient stock available
                abort(462, json_encode([
                    "id" => $productVariant->id,
                    "name" => $productVariant->product->name,
                    "size" => $productVariant->size_code,
                    "quantity_on_hand" => $productVariant->quantity_on_hand,
                ]));
            }

            $item = new OrderItem();
            $item->productVariant()->associate($productVariant);
            $item->price = $price;
            $item->qty = $quantity;
            $item->discount = $discount;
            $item->discountupdate_id = $discountId;

            return $item;
        });

        $nOrders = Order::whereDate('created_at', Carbon::today())->count();
        $nOrders++;

        $header = [
            'total_amount' => $request->totalAmount,
            'notes' => $request->notes,
            'shipment_id' => $request->input('shippingOptionSelected.id'),
            'shipment_name' => $request->input('shippingOptionSelected.description'),
            'shipping_cost' => $request->input('shippingOptionSelected.amount'),
            'invoice_id' => 'INV-' . Carbon::now()->format('Y-m-d-') . str_pad($nOrders, 5, '0', STR_PAD_LEFT),
            'customer_id' => $request->user()->id,
            'prism_checkout' => false,
            'order_status' => config('starcross.order.status.Pending'),
            'member_discount' => 0,
            'member_discount_id' => null,
        ];
        
        //$adminFeePercentage = $request->input('paymentOptionSelected.feePercentage');
        //$adminFeeNominal = $request->input('paymentOptionSelected.feeNominal');
        $header['payment_type'] = null;
        //$header['admin_fee'] = (($header['total_amount']-$header['member_discount']+$header['shipping_cost'])*$adminFeePercentage)+$adminFeeNominal;
        $header['admin_fee'] = 0;

        $order = new Order($header);

        // rename address object keys to database column names. e.g : from "zipCode" to "billing_zip_code"
        if ($request->filled('billingAddress')) {
            $order->fill($order->setAddress('billing', $request->input('billingAddress')));
        }

        if ($request->filled('shippingAddress')) {
            $order->fill($order->setAddress('shipping', $request->input('shippingAddress')));
        }

        $order->save();
        $order->items()->saveMany($items);

        DB::commit();
        return jsend_success($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return jsend_success(Order::with('items.productVariant')->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}