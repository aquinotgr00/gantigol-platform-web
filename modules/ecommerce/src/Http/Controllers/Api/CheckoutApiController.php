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
use DB;

class CheckoutApiController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shipping_name' => 'required',
            'shipping_phone' => 'required|max:12',
            'shipping_email' => 'required',
            'shipping_address' => 'required',
            'shipping_cost' => 'required',
            'billing_name' => 'required',
            'shipping_subdistrict_id' => 'required',
            'session' => 'required',
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
                $request->request->add(['customer_id' => $customer->id]);
            }
        } else {

            $customer = CustomerProfile::firstOrCreate(
                ['email' => $request->shipping_email],
                [
                    'name' => $request->shipping_name,
                    'email' => $request->shipping_email,
                    'phone' => $request->shipping_phone,
                    'address' => $request->shipping_address,
                    'birthdate' => date('Y-m-d')
                ]
            );
            $request->request->add(['customer_id' => $customer->id]);
        }

        $cart = Cart::where('session', $request->session)->first();

        if (!is_null($cart)) {
            
            if ($cart->getItems->count() > 0) {
                
                DB::beginTransaction();
                //create order
                $order = Order::create($request->except('_token'));
                
                $order->scheduleReminders(3,$order);
                
                $total_amount = 0;

                foreach ($cart->getItems as $key => $value) {
                    if ($value->checked == 'true') {
                        
                        $itemVariant = ProductVariant::find($value->product_id);
                        
                        if (!is_null($itemVariant)) {
                            
                            
                            $itemVariant->quantity_on_hand -= intval($value->qty);

                            try {
                                $itemVariant->save();
                            } catch (\Illuminate\Database\QueryException $e) {
                                DB::rollback();
                                $itemVariant->quantity_on_hand += $quantity;
                                // 462 : insufficient stock available
                                abort(462, json_encode([
                                    "id" => $itemVariant->id,
                                    "name" => $itemVariant->product->name,
                                    "variant" => $itemVariant->variant,
                                    "quantity_on_hand" => $itemVariant->quantity_on_hand,
                                ]));
                            }
                            
                            $orderItem = OrderItem::create([
                                'order_id' => $order->id,
                                'productvariant_id' => $value->product_id,
                                'qty' => $value->qty,
                                'price' => $value->price
                            ]);
                            if (isset($orderItem->subtotal)) {
                                $total_amount += intval($orderItem->subtotal);
                            }

                        }

                        $itemCart = CartItems::find($value->id);
                        if (!is_null($itemCart)) {
                            $itemCart->delete();
                        }
                    }
                }

                DB::commit();

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

                return response()->json(['data'=> $order ]);
            }
        }
        return response()->json(['data'=>[]]);

        if (
            !is_null($cart) &&
            !isset($cart->getItems)
        ) {
            $cart->delete();
        }
    }
}
