<?php

namespace Modules\Ecommerce\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Modules\Ecommerce\Cart;
use Modules\Ecommerce\CartItems;
use Modules\Ecommerce\Http\Resources\CartResource;
use Modules\Membership\Member;
use Modules\Product\ProductVariant;
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
            foreach ($cart->getItems as $key => $value) {
                if (isset($value->productVariant->product)) {
                    $value->productVariant->product->name;
                }
            }
        } else {
            $validator = Validator::make($request->all(), [
                'session' => 'required',
                //'user_id' => 'exists:states,id',
            ]);

            if ($validator->fails()) {
                return new CartResource($validator->messages());
            }

            $cart = Cart::with('getItems')
                ->where('session', $request->session)
            //->where('user_id',$request->user_id)
                ->get();
                
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
            'user_id' => 'numeric',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }

        $existCart = Cart::where('session', $request->session)->first();
        if (is_null($existCart)) {
            $cart = new Cart;
            $cart->total = $request->total;
            $cart->session = $request->session;
            if (isset($request->user_id)) {
                $member = Member::find($request->user_id);
                if (!is_null($member)) {
                    $cart->user_id = $member->id;
                }

            }
            $cart->save();
        } else {
            $cart = $existCart;
        }

        foreach ($request->items as $key => $value) {
            
            $valid = Validator::make($value, [
                'qty' => 'required|numeric',
                'product_id' => 'required',
                'price' => 'required',
                'subtotal' => 'required'
            ]);

            if ($valid->fails()) {
                return new CartResource($valid->messages());
            }

            $cartItemExist = null;

            if (isset($value['size_code'])) {
                $cartItemExist = CartItems::where('cart_id', $cart->id)
                ->where('product_id', $value['product_id'])
                ->where('size_code', $value['size_code'])
                ->first();
            }else{
                $cartItemExist = CartItems::where('cart_id', $cart->id)
                ->where('product_id', $value['product_id'])
                ->first();
            }
            if (is_null($cartItemExist)) {
                $value = array_merge($value, ['cart_id' => $cart->id]);
                $cartItem = CartItems::create($value);
            } else {
                $value = array_merge($value, [
                    'qty' => $cartItemExist->qty + $value['qty'],
                    'subtotal' => $cartItemExist->subtotal + $value['subtotal'],
                ]);
                $cartItemExist->update($value);
            }
        }

        $cart->getItems;
        $total  = 0;
        $amount_items    = 0;
        foreach ($cart->getItems as $key => $value) {
            $amount_items += intval($value->qty);
            $total += intval($value->subtotal);
        }
        $cart->update([
            'total' => $total,
            'amount_items' => $amount_items
        ]);

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
            'items' => 'array'
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
        $total          = 0;
        $amount_items   = 0;
        foreach ($cart->getItems as $key => $value) {
            $amount_items += intval($value->qty);
            $total += intval($value->subtotal);
        }
            
        $cart->update([
            'total' => $total,
            'amount_items' => $amount_items
        ]);
        $cart->getItems;
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

        $cartItem   = CartItems::find($id);
        $cart       = null;
        if (!is_null($cartItem)) {
            
            $cartItem->update($request->except('_token', '_method'));

            $cart           = Cart::find($cartItem->cart_id);
            $total          = 0;
            $amount_items   = 0;
            foreach ($cart->getItems as $key => $value) {
                $amount_items += intval($value->qty);
                $total += intval($value->subtotal);
            }
            
            $cart->update([
                'total' => $total,
                'amount_items' => $amount_items
            ]);
            
            $cart->getItems;

        }
        
        
        return new CartResource($cart);
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
            $cart->delete();
            return response()->json(['message'=>200]);
        } else {
            return response()->json(['message'=>204]);
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
        if (
                !is_null($cartItem) &&
                ($cartItem->delete())
            ) {
            
            $cart   = Cart::find($cartItem->cart_id);
            $total  = 0;
            $amount_items   = 0;
            foreach ($cart->getItems as $key => $value) {
                $amount_items += intval($value->qty);
                $total += intval($value->subtotal);
            }
                
            $cart->update([
                'total' => $total,
                'amount_items' => $amount_items
            ]);
            $cart->getItems;
            return response()->json(['data'=> $cart,'message'=>200]);

        } else {
            return response()->json(['message'=>204]);
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

    public function cartGuestLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'session' => 'required',
            'user_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }
        $member = Member::find($request->user_id);
        $cart = Cart::where('session', $request->session)->first();
        $cart->update([
            'user_id' => $request->user_id,
        ]);
        $cart->getItems;
        return new CartResource($cart);
    }

    public function deleteItemVariant(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'session' => 'required',
        ]);

        if ($validator->fails()) {
            return new CartResource($validator->messages());
        }

        try {
            $productVariant = ProductVariant::findOrFail($id);
            $cart           = Cart::where('session', $request->session)->first();
            if (!is_null($cart)) {
                $cartItems = $cart->getItems->where('product_id', $productVariant->id);
                foreach ($cartItems as $key => $value) {
                    $value->delete();
                }
                $cart->getItems;
            }
            return response()->json($cart);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['data' => 'not found']);
        }
    }
}
