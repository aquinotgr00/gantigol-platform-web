<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreOrder extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'quota', 'end_date'];

    /**
     * product relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('\Modules\Product\Product')->latest();
    }
    /**
     * transaction relationship
     *
     * @return mixed
     */
    public function transaction()
    {
        return $this->hasMany('\Modules\Preorder\Transaction', 'pre_order_id', 'id');
    }
    /**
     * [production description]
     *
     * @return mixed
     */
    public function production()
    {
        return $this->hasManyThrough(
            '\Modules\Product\Production',
            '\Modules\Product\ProductionBatch',
            'pre_order_id',
            'production_batch_id',
            'id',
            'id'
        );
    }
}
