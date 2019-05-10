<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Product extends Model
{
    use FormAccessible;
    
    protected $casts = [ 'size_codes' => 'array' ];
    protected $fillable = ['name', 'description', 'image', 'category_id', 'price', 'weight', 'size_id', 'status'];
    protected $appends = ['size_available'];


    public function category() {
        return $this->belongsTo('\Modules\ProductCategory\ProductCategory','category_id');
    }

    public function size() {
        return $this->belongsTo('\Modules\Product\ProductSize','size_id');
    }
    
    public function images() {
        return $this->hasMany('\Modules\Product\ProductImage');
    }
    
    public function priceUpdates() {
        return $this->hasMany('\Modules\Product\PriceUpdate');
    }
    
    public function latestPrice() {
        return $this->hasOne('\Modules\Product\PriceUpdate')->latest();
    }
    
    public function variants() {
        return $this->hasMany('\Modules\Product\ProductVariant');
    }
    
    public function discounts() {
        return $this->hasManyThrough('\Modules\Product\Discount', '\Modules\Product\DiscountProduct', 'product_id','id','id','discount_id');
    }
    
    public function crossSellProducts() {
        return $this->hasManyThrough('\Modules\Product\Product', '\Modules\Product\CrossSellProduct', 'product_id','id','id','cross_sell_product_id');
    }
    
    public function discountProduct() {
        return $this->hasOne('\Modules\Product\DiscountProduct','product_id','id');
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
}
