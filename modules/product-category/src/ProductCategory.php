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
    protected $fillable = ['name','image','parent_id'];
    
    public function parentCategory() {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
    
    public function subcategory() {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }
    
    public function subcategories() {
        return $this->subcategory()->with('subcategories');
    }
}
