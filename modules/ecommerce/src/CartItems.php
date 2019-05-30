<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $guarded = [];
    public function fromCart()
    {
        return $this->belongsTo('Modules\Ecommerce\Cart', 'cart_id', 'id');
    }
}
