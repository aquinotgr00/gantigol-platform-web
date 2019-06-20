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

    protected $appends = ['amount_weight'];

    public function getItems()
    {
        return $this->hasMany('\Modules\Ecommerce\CartItems', 'cart_id', 'id');
    }

    public function getAmountWeightAttribute()
    {
        $amount_weight = 0;
        foreach ($this->getItems as $key => $value) {
            $sub_weight = 0;
            if (isset($value->productVariant->product->weight)) {
                $sub_weight     = $value->qty * $value->productVariant->product->weight;
                $amount_weight += $sub_weight;
            }
        }
        return $amount_weight;
    }

    public function user()
    {
        if (class_exists('\Modules\Membership\Member')) {
            return $this->belongsTo('\Modules\Membership\Member','user_id','id');
        }
        return null;
    }
}
