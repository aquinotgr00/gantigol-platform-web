<?php

namespace Modules\ProductCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\Models\Media;
use Modules\Medias\Content;

class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name','image_id','parent_id'];
    
    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
    
    public function parentCategory() {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
    
    public function subcategory() {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }
    
    public function subcategories() {
        return $this->subcategory()->with('subcategories');
    }

    public function productItems(): hasMany
    {
        if (class_exists('\Modules\Product\Product')) { 
            return $this->hasMany('\Modules\Product\Product','category_id','id');
        }
        return false;
    }
}
