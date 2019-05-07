<?php

namespace Modules\ProductManagement;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class StockOpnameList extends Model
{
    use FormAccessible;

    protected $table = 'stock_opname_list';

    protected $fillable = ['stock_opname_id', 'product_variants_id', 'qty', 'note', 'is_same'];

    public function stockOpname() {
        return $this->belongsTo('\Modules\ProductManagement\StockOpname', 'stock_opname_id', 'id');
    }

    public function productvariant() {
        return $this->belongsTo('\Modules\ProductManagement\ProductVariant', 'product_variants_id', 'id');
    }

}