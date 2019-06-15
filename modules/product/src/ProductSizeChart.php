<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;

class ProductSizeChart extends Model
{
    protected $fillable = ['name','category_id','image','image_id'];

    public function category() {
        return $this->belongsTo('\Modules\ProductCategory\ProductCategory','category_id');
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
