<?php

namespace Modules\ProductManagement;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Product extends Model
{
    use FormAccessible;
    
    protected $casts = [ 'size_codes' => 'array' ];
    protected $fillable = ['name', 'description', 'image', 'category_id', 'price', 'weight', 'size_id', 'status'];
    protected $appends = ['size_available'];


    public function category() {
        return $this->belongsTo('\Modules\ProductManagement\ProductCategory','category_id');
    }

    public function size() {
        return $this->belongsTo('\Modules\ProductManagement\ProductSize','size_id');
    }
    
    public function images() {
        return $this->hasMany('\Modules\ProductManagement\ProductImage');
    }
    
    public function priceUpdates() {
        return $this->hasMany('\Modules\ProductManagement\PriceUpdate');
    }
    
    public function latestPrice() {
        return $this->hasOne('\Modules\ProductManagement\PriceUpdate')->latest();
    }
    
    public function variants() {
        return $this->hasMany('\Modules\ProductManagement\ProductVariant');
    }
    
    public function discounts() {
        return $this->hasManyThrough('\Modules\ProductManagement\Discount', '\Modules\ProductManagement\DiscountProduct', 'product_id','id','id','discount_id');
    }
    
    public function crossSellProducts() {
        return $this->hasManyThrough('\Modules\ProductManagement\Product', '\Modules\ProductManagement\CrossSellProduct', 'product_id','id','id','cross_sell_product_id');
    }
    
    public function discountProduct() {
        return $this->hasOne('\Modules\ProductManagement\DiscountProduct','product_id','id');
    }
    
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords($value);
    }
    
    public function setSizeCodesAttribute($value) {
        $this->attributes['size_codes'] = json_encode(array_map('trim',explode(",", strtoupper($value))));
    }
    
    public function getFormattedPriceAttribute() {
        return sprintf('%s', number_format($this->price, 2));;
    }
    
    public function formSizeCodesAttribute($value) {
        if($value) {
            return join(', ', json_decode($value));
        }
        else {
            return $value;
        }
    }
    
    public function getSizeAvailableAttribute() {
        return [];
    }

    public function orders() {
        return $this->hasManyThrough('\Modules\ProductManagement\OrderItem', '\Modules\ProductManagement\ProductVariant', 'product_id', 'productvariant_id')->with('order');
    }

}
