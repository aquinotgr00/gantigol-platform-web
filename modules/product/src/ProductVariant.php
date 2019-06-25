<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;
//use Collective\Html\Eloquent\FormAccessible;

class ProductVariant extends Model
{
    protected $fillable = ['product_id','variant','size_code','price', 'sku','image','description', 'initial_balance', 'quantity_on_hand','isPrismSearch'];
    protected $appends = ['stock','currency_code','name'];
    protected $casts = ['id'=>'string'];
    
    //use FormAccessible;
    
    public function product() {
        return $this->belongsTo("\Modules\Product\Product");
    }
    
    public function setSizeCodeAttribute($value) {
        $this->attributes['size_code'] = strtoupper($value);
    }
        
    public function getNameAttribute() {
        if($this->product) {
            return $this->product->name.' #'.ucwords($this->variant);
        }
        return $this->product;
    }
    /*
    public function getDescriptionAttribute() {
        if($this->product) {
            return $this->product->description;
        }
        return $this->product;
    }*/
    
    public function getStockAttribute() {
        return $this->quantity_on_hand;
    }
    
    public function getCurrencyCodeAttribute() {
        return 'IDR';
    }
}
