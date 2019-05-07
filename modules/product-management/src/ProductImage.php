<?php

namespace Modules\ProductManagement;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['image'];
    
    public function product() {
        return $this->belongsTo("\Modules\ProductManagement\Product");
    }
}
