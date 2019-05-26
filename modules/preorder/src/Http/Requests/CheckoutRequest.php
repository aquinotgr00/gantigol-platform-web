<?php

namespace Modules\Preorder\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that Modules\Preorderly to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'quantity' => 'required|numeric',
            'amount' => 'required|numeric',
            'courier_name' => 'required',
            'courier_type' => 'required',
            'courier_fee' => 'numeric',
        ];
    }
}
