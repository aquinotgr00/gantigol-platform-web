<?php

namespace Modules\Ecommerce;

use Modules\Ecommerce\Traits\OrderTrait;
use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    use OrderTrait;

    protected $fillable = [
        'invoice_id',
        'customer_id',
        'billing_name',
        'billing_email',
        'billing_phone',
        'billing_address',
        'billing_subdistrict_id',
        'billing_subdistrict',
        'billing_city',
        'billing_province',
        'billing_zip_code',
        'billing_country',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
        'shipping_subdistrict_id',
        'shipping_subdistrict',
        'shipping_city',
        'shipping_province',
        'shipping_zip_code',
        'shipping_country',
        'shipment_id',
        'shipment_name',
        'shipping_cost',
        'total_amount',
        'admin_fee',
        'member_discount',
        'member_discount_id',
        'payment_type',
        'payment_confirmation_link',
        'prism_checkout',
        'order_status',
        'notes',
        'shipping_tracking_number',
        'discount'
    ];
    protected $appends = ['invoice_date', 'invoice_status', 'buyer_name', 'guest', 'amount_weight'];

    public function user()
    {
        return $this->belongsTo('App\User', 'customer_id');
    }

    public function items()
    {
        return $this->hasMany('\Modules\Ecommerce\OrderItem');
    }

    public function getInvoiceDateAttribute()
    {
        return $this->created_at->format('d-m-Y H:i');
    }

    public function getInvoiceStatusAttribute()
    {
        return array_keys(config('ecommerce.order.status'))[$this->order_status];
    }

    public function getGuestAttribute()
    {
        $isGuest = $this->user()->first();
        if ($isGuest === null) {
            return true;
        }
        return false;
    }

    public function getBuyerNameAttribute()
    {
        $isGuest = $this->user()->first();
        if ($isGuest === null) {
            return $this->billing_name;
        }
        return $isGuest->name;
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public static function getNextID()
    {
        $table_name = static::getTableName();
        $statement = DB::select("SHOW TABLE STATUS LIKE '$table_name'");
        $nextId = $statement[0]->Auto_increment;
        return $nextId;
    }

    public function customer()
    {
        if (class_exists('\Modules\Customers\CustomerProfile')) {
            return $this->belongsTo('\Modules\Customers\CustomerProfile', 'customer_id', 'id');
        }
        return null;
    }

    public function shippingSubdistrict()
    {

        if (class_exists('\Modules\Shipment\Subdistrict')) {
            return $this->belongsTo('\Modules\Shipment\Subdistrict', 'shipping_subdistrict_id', 'id');
        }
        return null;
    }

    public function billingSubdistrict()
    {

        if (class_exists('\Modules\Shipment\Subdistrict')) {
            return $this->belongsTo('\Modules\Shipment\Subdistrict', 'billing_subdistrict_id', 'id');
        }
        return null;
    }

    public function getAmountWeightAttribute()
    {
        $amount_weight = 0;
        foreach ($this->items as $key => $value) {
            $sub_weight = 0;
            if (isset($value->productVariant->product->weight)) {
                $sub_weight     = $value->qty * $value->productVariant->product->weight;
            }
            $amount_weight += $sub_weight;
        }
        return $amount_weight;
    }
}
