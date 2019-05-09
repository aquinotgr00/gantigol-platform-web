<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;

class TransactionReminder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id',
        'email',
        'send_time',
        'respons_time',
        'notes'
    ];

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
