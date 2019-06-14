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

        $order_next_id = Order::getNextID();
        $invoice_id = str_pad($order_next_id, 5, "0", STR_PAD_LEFT);
        $invoice_parts = array('INV', date('Y-m-d'), $invoice_id);
        $invoice = implode('-', $invoice_parts);

        $request->request->add(['invoice_id' => $invoice]);

        $request->request->add(['order_status' => 0]);

        if ($request->has('customer_id')) {

            $request->request->add(['customer_id' => $request->customer_id]);

        } else if ($request->has('user_id')) {

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

            } else {
                //member not exist
                $customer = CustomerProfile::create([
                    'name' => $request->shipping_name,
                    'email' => $request->shipping_email,
                    'phone' => $request->shipping_phone,
                    'address' => $request->shipping_address,
                    'birthdate' => date('Y-m-d'),
                ]);

                $request->request->add(['customer_id' => $customer->id]);
            }

        } else {

            $customer = CustomerProfile::create([
                'name' => $request->shipping_name,
                'email' => $request->shipping_email,
                'phone' => $request->shipping_phone,
                'address' => $request->shipping_address,
                'birthdate' => date('Y-m-d'),
            ]);

            $request->request->add(['customer_id' => $customer->id]);
        }

        $order = Order::create($request->except('_token'));
        
        $items = [];

        if ($request->items) {
            $items = $request->items;
        } elseif ($request->has('session')) {
            $cart = Cart::where('session', $request->session)->first();
            if (!is_null($cart)) {
                
                $data = $cart->getItems->where('checked', 'true');

                foreach ($data as $key => $value) {
                    $items[] = [
                        'productvariant_id' => $value->product_id,
                        'qty' => $value->qty,
                        'price' => $value->price
                    ];
                    $itemCart = CartItems::find($value->id);
                    $itemCart->delete();
                }
            }

        }

        if ($items) {
            foreach ($items as $key => $value) {
                try {

                    $productVariant = ProductVariant::findOrFail($value['productvariant_id']);

                    $order_item = new OrderItem;
                    $order_item->order_id = $order->id;
                    $order_item->productvariant_id = $productVariant->id;
                    $order_item->qty = $value['qty'];
                    $order_item->price = $value['price'];
                    $order_item->save();

                } catch (ModelNotFoundException $exception) {

                }
            }
        }

        $order->items;
        return response()->json($order);
    }
}
