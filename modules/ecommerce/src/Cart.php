<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'total',
        'coupon',
        'amount_items'
    ];
    
    public function getItems()
    {
        return $this->hasMany('\Modules\Ecommerce\CartItems', 'cart_id', 'id');
    }
}
