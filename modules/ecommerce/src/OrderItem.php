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
        'review_date',
        'order_id'
    ];
    
    protected $appends = ['subtotal'];

    public function productVariant() {
        if (class_exists('\Modules\Product\ProductVariant')) {
            return $this->belongsTo(\Modules\Product\ProductVariant::class,'productvariant_id');
        }
        return null;
    }

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function getSubtotalAttribute()
    {
        $subtotal = intval($this->qty) * intval($this->price);
        return $subtotal;
    }
}
