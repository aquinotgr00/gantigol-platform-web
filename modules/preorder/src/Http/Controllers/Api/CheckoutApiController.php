<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class CheckoutApiController extends Controller
{
    /**
     *
     * @return  mixed
     */
    public function withShipping()
    {
        $rules      = (new \Modules\Preorder\Http\Requests\CheckoutRequest)->rules();
        $provinces  = config('preorder.provinces');
        $rules      = array_merge($rules, [
            'provinces'=> $provinces
        ]);
        return response()->json($rules);
    }
}
