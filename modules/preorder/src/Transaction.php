<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Modules\Preorder\Production;
use Modules\Ecommerce\Traits\OrderTrait;
use DB;

class Transaction extends Model
{
    use OrderTrait;
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
        'customer_id',
        'invoice',
        'discount'
    ];

    protected $appends = ['amount_weight','net_total'];

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
        return static::where('status', 'pending')
            ->where('payment_reminder', '<=', $interval)
            ->get();
    }

    public function getSubdistrict()
    {

        if (class_exists('\Modules\Shipment\Subdistrict')) {
            return $this->belongsTo('\Modules\Shipment\Subdistrict', 'subdistrict_id', 'id');
        }
        return null;
    }

    public function customer()
    {
        if (class_exists('\Modules\Customers\CustomerProfile')) {
            return $this->belongsTo('\Modules\Customers\CustomerProfile', 'customer_id', 'id');
        }
        return null;
    }

    /**
     * Retrieves the acceptable enum fields for a column
     *
     * @param string $column Column name
     *
     * @return array
     */
    public static function getPossibleEnumValues($column)
    {
        // Create an instance of the model to be able to get the table name
        $instance = new static;

        // Pulls column string from DB
        $enumStr = DB::select(DB::raw('SHOW COLUMNS FROM ' . $instance->getTable() . ' WHERE Field = "' . $column . '"'))[0]->Type;

        // Parse string
        preg_match_all("/'([^']+)'/", $enumStr, $matches);

        // Return matches
        return isset($matches[1]) ? $matches[1] : [];
    }

    public function getAmountWeightAttribute()
    {
        $amount_weight = 0;
        foreach ($this->orders as $key => $value) {
            $sub_weight = 0;
            if (isset($value->productVariant->product->weight)) {
                $sub_weight     = $value->qty * $value->productVariant->product->weight;
                $amount_weight += $sub_weight;
            }
        }
        return $amount_weight;
    }

    public function getNetTotalAttribute()
    {
        $net_total = intval($this->amount) - intval($this->courier_fee) + intval($this->discount);
        return $net_total;
    }
}
