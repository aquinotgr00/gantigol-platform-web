<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Cart;
use Modules\Ecommerce\CartItems;
use Modules\Ecommerce\Http\Resources\CartResource;
use Validator;

class CartApiController extends Controller
{
    /**
     *
     * @param   Request  $request
     * @param   int      $id       cart id
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function show(Request $request, int $id)
    {
        $cart = Cart::find($id);
        if (!is_null($cart)) {
            $cart->getItems;
        }
        return new CartResource($cart);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'items' => 'required|array',
            'session' => 'required',
            'total' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }

        $existCart = Cart::where('session', $request->session)->first();
        if (is_null($existCart)) {
            $cart = new Cart;
            $cart->total    = $request->total;
            $cart->session  = $request->session;
            $cart->save();
        } else {
            $cart = $existCart;
        }
        
        foreach ($request->items as $key => $value) {

            $valid = Validator::make($value, [
                'qty' => 'required|numeric',
                'product_id' => 'required',
                'price' => 'required',
                'subtotal' => 'required',
                'attributes' => 'json',
            ]);

            if ($valid->fails()) {
                return new CartResource($valid->messages());
            }

            $cartItemExist = CartItems::where('cart_id',$cart->id)
            ->where('product_id',$value['product_id'])
            ->first();
            if (is_null($cartItemExist)) {
                $value = array_merge($value, ['cart_id' => $cart->id]);
                $cartItem = CartItems::create($value);
            }else{
                $value = array_merge($value, [
                    'qty' => $cartItemExist->qty + $value['qty'],
                    'subtotal' => $cartItemExist->subtotal + $value['subtotal'],
                ]);
                $cartItemExist->update($value);
            }
        }

        $cart->getItems;
        return new CartResource($cart);
    }
    /**
     * [update description]
     *
     * @param   Request  $request use application/x-www-form-urlencoded.
     * @param   int      $id
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'items' => 'array',
            'total' => 'required',
            'amount_items' => 'numeric',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }

        $cart = Cart::find($id);
        if (!is_null($cart)) {
            $cart->update($request->all());
            if ($cart->getItems->count() > 0) {
                foreach ($cart->getItems as $key => $value) {
                    if (isset($request->items[$key])) {
                        $value->update($request->items[$key]);
                    }
                }
            }
        }
        return new CartResource($cart);
    }
    /**
     *
     * @param   Request  $request
     * @param   int      $id
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function updateItem(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'price' => 'required',
            'subtotal' => 'required',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }

        $cartItem = CartItems::find($id);
        if (!is_null($cartItem)) {
            $cartItem->update($request->all());
        }
        return new CartResource($cartItem);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function trashed(int $id)
    {
        $cart = Cart::find($id);
        if (!is_null($cart)) {
            $cart->trashed();
            return response()->json('success', 204);
        } else {
            return response()->json('error', 204);
        }
    }
    /**
     *
     * @param   Request  $request
     * @param   int      $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteItem(Request $request, int $id)
    {
        $cartItem = CartItems::find($id);
        if (!is_null($cartItem)) {
            $cartItem->delete();
            return response()->json('success', 204);
        } else {
            return response()->json('error', 204);
        }
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function getWishList(int $id)
    {
        $cart = Cart::find($id);
        $data = $cart->getItems->where('wishlist', 'true');
        return new CartResource($data);
    }
    /**
     *
     * @param   int  $id
     *
     * @return \Modules\Ecommerce\Http\Resources\CartResource
     */
    public function getChecked(int $id)
    {
        $cart = Cart::find($id);
        $data = $cart->getItems->where('checked', 'true');
        return new CartResource($data);
    }
}
