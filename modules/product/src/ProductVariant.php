<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;
//use Collective\Html\Eloquent\FormAccessible;

class ProductVariant extends Model
{
    protected $fillable = ['product_id','variant','size_code', 'sku', 'initial_balance', 'quantity_on_hand','isPrismSearch'];
    protected $appends = ['name','description','price','stock','currency_code', 'image_urls'];
    protected $casts = ['id'=>'string'];
    
    //use FormAccessible;
    
    public function product() {
        return $this->belongsTo("\Modules\Product\Product");
    }
    
    public function setSizeCodeAttribute($value) {
        $this->attributes['size_code'] = strtoupper($value);
    }
    
    public function orders() {
        return $this->hasMany("\Modules\Product\OrderItem","productvariant_id");
    }
    
    public function getNameAttribute() {
        if($this->product) {
            return $this->product->name.' #Size: '.$this->size_code;
        }
        return $this->product;
    }
    
    public function getDescriptionAttribute() {
        if($this->product) {
            return $this->product->description;
        }
        return $this->product;
    }
    
    public function getPriceAttribute() {
        if($this->product) {
            return (string) $this->product->price;
        }
        return $this->product;
    }
    
    public function getStockAttribute() {
        return $this->quantity_on_hand;
    }
    
    public function getCurrencyCodeAttribute() {
        return 'IDR';
    }
    
    public function getImageUrlsAttribute() {
        if($this->product) {
            $images = [$this->urlToPath($this->product->image,$this->isPrismSearch)];
            foreach($this->product->images as $productImage) {
                $images[] = $this->urlToPath($productImage->image,$this->isPrismSearch);
            }
            return $images;
        }
    }
    
    private function urlToPath($url, $useFullPath=false) {
        if($useFullPath) {
            return image_url('res/500/500/'.$url);
        }
        else {
            return $url;
        }
    }
}
