<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Production extends Model
{
    use SoftDeletes;
    /**
     * Columns that are mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id',
        'tracking_number',
        'status',
        'production_batch_id'
    ];
    /**
     * [ description]
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getProductionBatch()
    {
        //return $this->belongsTo(ProductionBatch::class);
        return $this->belongsTo('\Modules\Preorder\ProductionBatch', 'production_batch_id', 'id');
    }

    /**
     * transaction relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getTransaction()
    {
        return $this->belongsTo('\Modules\Preorder\Transaction', 'transaction_id', 'id');
    }
}
