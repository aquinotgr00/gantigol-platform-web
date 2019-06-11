<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;

class ProductVariantAttribute extends Model
{
    protected $fillable = ['attribute','value'];
}
