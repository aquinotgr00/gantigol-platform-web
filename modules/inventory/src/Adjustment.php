<?php

namespace Modules\Inventory;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use DB;

class Adjustment extends Model
{
    use FormAccessible;

    protected $fillable = ['product_variants_id', 'method', 'qty', 'users_id', 'note', 'type'];

    public function productVariant() {
        return $this->belongsTo('\Modules\Product\ProductVariant','product_variants_id');
    }

    public function users() {
        return $this->belongsTo("\Modules\Admin\Admin");
    }
}