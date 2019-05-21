<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Modules\Preorder\PreOrdersItems;
use Modules\Preorder\Production;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subdistrict_id',
        'pre_order_id',
        'name',
        'email',
        'phone',
        'address',
        'postal_code',
        'note',
        'amount',
        'courier_name',
        'courier_type',
        'courier_fee',
        'quantity',
        'status',
    ];

    /**
     * Show all the reminders based on transaction id.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getTransactionReminders()
    {
        return $this->hasMany(TransactionReminder::class);
    }

    /**
     * production relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getProduction()
    {
        return $this->hasOne(Production::class);
    }
    /**
     * Pre Order relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preOrder()
    {
        return $this->belongsTo('\Modules\Preorder\PreOrder');
    }

    /**
     * order relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('\Modules\Preorder\PreOrdersItems', 'transaction_id', 'id');
    }
    /**
     *
     * @param int $interval
     *
     * @return mixed
     */
    public static function getToReminder(int $interval)
    {
        return static::where('status', 'unpaid')
            ->where('payment_reminder', '<=', $interval)
            ->get();
    }
}
