<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Model;

class ProductProperties extends Model
{
    protected $fillable = ['attribute','value'];
}
