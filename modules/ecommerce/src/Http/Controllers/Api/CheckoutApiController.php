<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Modules\Customers\CustomerProfile;
use Modules\Ecommerce\Cart;
use Modules\Ecommerce\CartItems;
use Modules\Ecommerce\Order;
use Modules\Ecommerce\OrderItem;
use Modules\Membership\Member;
use Modules\Product\ProductVariant;
use Validator;

class CheckoutApiController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'items' => 'array',
            'shipping_name' => 'required',
            'shipping_phone' => 'required|max:12',
            'shipping_email' => 'required',
            'shipping_address' => 'required',
            'shipping_cost' => 'required',
            'billing_name' => 'required',
            'shipment_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $order_next_id      = Order::getNextID();
        $invoice_id         = str_pad($order_next_id, 5, "0", STR_PAD_LEFT);
        $invoice_parts      = array('INV', date('Y-m-d'), $invoice_id);
        $invoice            = implode('-', $invoice_parts);

        $request->request->add(['invoice_id' => $invoice]);

        $request->request->add(['order_status' => 0]);

        if ($request->has('customer_id')) {

            $request->request->add(['customer_id' => $request->customer_id]);
        }

        if ($request->has('user_id')) {

            $member = Member::find($request->user_id);

            if (!is_null($member)) {
                $customer_exist = CustomerProfile::where('user_id', $member->id)->first();

                if (!is_null($customer_exist)) {

                    $customer_id = $customer_exist->id;
                } else {

                    $new_customer = CustomerProfile::create([
                        'name' => $member->name,
                        'email' => $member->email,
                        'phone' => $member->phone,
                        'address' => $member->address,
                        'birthdate' => date('Y-m-d'),
                    ]);

                    $new_customer->user_id = $member->id;
                    $new_customer->update();

                    $customer_id = $new_customer->id;
                }

                $request->request->add(['customer_id' => $customer_id]);
            }

        } else {

            $customerExist = CustomerProfile::where('email', $request->shipping_name)->first();

            if (is_null($customerExist)) {
                $customer = CustomerProfile::create([
                    'name' => $request->shipping_name,
                    'email' => $request->shipping_email,
                    'phone' => $request->shipping_phone,
                    'address' => $request->shipping_address,
                    'birthdate' => date('Y-m-d'),
                ]);
                $request->request->add(['customer_id' => $customer->id]);
            }else{
                $request->request->add(['customer_id' => $customerExist->id]);
            }
        }

        $order = Order::create($request->except('_token'));

        $items = [];

        if ($request->items) {
            $items = $request->items;
        }

        if ($request->has('session')) {
            $cart = Cart::where('session', $request->session)->first();

            if (!is_null($cart)) {
                if (isset($cart->getItems)) {
                    foreach ($cart->getItems as $key => $value) {
                        if ($value->checked == 'true') {
                            $items[] = [
                                'productvariant_id' => $value->product_id,
                                'qty' => $value->qty,
                                'price' => $value->price
                            ];
                            $itemCart = CartItems::find($value->id);
                            if (!is_null($itemCart)) {
                                $itemCart->delete();
                            }
                        }
                    }
                }
            }
            
            if (
                !is_null($cart) &&
                !isset($cart->getItems)
                ) {
                $cart->delete();
            }
        }

        $total_amount = 0;

        if ($items) {
            foreach ($items as $key => $value) {
                $itemVariant = ProductVariant::find($value['productvariant_id']);
                if (!is_null($itemVariant)) {
                    $value = array_merge($value, ['order_id' => $order->id]);
                    $orderItem = OrderItem::create($value);
                    if (isset($orderItem->subtotal)) {
                        $total_amount += intval($orderItem->subtotal);
                    }
                }
            }
        }

        $order->update([
            'total_amount' => $total_amount
        ]);

        if (isset($order->items)) {
            foreach ($order->items as $key => $value) {
                if (isset($value->productVariant)) {
                    $value->productVariant;
                }
            }
        }

        return response()->json($order);
    }
}
