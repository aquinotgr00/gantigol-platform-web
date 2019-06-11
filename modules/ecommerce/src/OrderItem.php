<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'productvariant_id',
        'qty',
        'price',
        'priceupdate_id',
        'discount',
        'discountupdate_id',
        'review',
        'review_status',
        'rating',
        'review_date'
    ];
    
    public function productVariant() {
        return $this->belongsTo(ProductVariant::class,'productvariant_id');
    }

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
