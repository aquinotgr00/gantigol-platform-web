<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreOrdersItems extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id',
        'pre_order_id',
        'product_id',
        'model',
        'size',
        'qty',
        'subtotal',
        'price'
    ];
    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preOrder()
    {
        return $this->belongsTo('\Modules\Preorder\PreOrder', 'pre_order_id', 'id');
    }
    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo('\Modules\Preorder\Transaction', 'transaction_id', 'id');
    }
    /**
     * product variant relations
     *
     * @return void
     */
    public function productVariant()
    {
        return $this->belongsTo('\Modules\Product\ProductVariant', 'product_id', 'id');
    }
}
