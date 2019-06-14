<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'total',
        'coupon',
        'user_id',
        'amount_items',
        'session'
    ];
    
    public function getItems()
    {
        return $this->hasMany('\Modules\Ecommerce\CartItems', 'cart_id', 'id');
    }
}
