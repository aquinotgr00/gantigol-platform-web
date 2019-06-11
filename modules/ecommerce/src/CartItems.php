<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItems extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    public function fromCart()
    {
        return $this->belongsTo('Modules\Ecommerce\Cart', 'cart_id', 'id');
    }

    public function productVariant()
    {
        return $this->belongsTo('Modules\Product\ProductVariant','product_id','id');
    }
}
