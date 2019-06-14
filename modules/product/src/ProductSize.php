<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class ProductSize extends Model
{
    use FormAccessible;
    
    protected $casts = [
        'codes' => 'array',
    ];
    
    protected $fillable = ['name','codes','charts','image'];

    public function products() {
        return $this->hasMany("\Modules\Product\Product","category_id");
    }
    
    public function formCodesAttribute($value)
    {
        return join(', ', json_decode($value));
    }
    
    public function setCodesAttribute($value) {
        $this->attributes['codes'] = json_encode(array_map('trim',explode(",", strtoupper($value))));
    }
}
