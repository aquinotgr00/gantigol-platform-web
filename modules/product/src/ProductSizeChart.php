<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;

class ProductSizeChart extends Model
{
    protected $fillable = ['name','category_id','image'];

    public function category() {
        return $this->belongsTo('\Modules\ProductCategory\ProductCategory','category_id');
    }
}
