<?php

namespace Modules\ProductCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\Models\Media;

class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'image_id', 'parent_id'];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }

    public function parentCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    public function subcategory()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }

    public function subcategories()
    {
        return $this->subcategory()->with('subcategories');
    }

    public function productItems()
    {
        return $this->hasMany('\Modules\Product\Product', 'category_id', 'id');
    }

    public function parentRecursive()
    {
        return $this->parentCategory()->with('parentRecursive');
    }

    public function sizeChart()
    {
        if (class_exists('\Modules\Product\ProductSizeChart')) {
            return $this->hasOne(\Modules\Product\ProductSizeChart::class, 'category_id', 'id');
        }
        return null;
    }

    public function checkIfHasOneItem(int $id)
    {
        $sizeChart      = static::doesntHave('sizeChart')->where('id',$id)->get();
        $productItems   = static::doesntHave('productItems')->where('id',$id)->get();
        return ($sizeChart->count() > 0 || $productItems->count() > 0);
    }
}
