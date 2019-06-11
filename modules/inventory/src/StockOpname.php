<?php

namespace Modules\Inventory;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class StockOpname extends Model
{
    use FormAccessible;

    protected $table = 'stock_opname';
    protected $dates = ['date'];
    protected $fillable = ['date', 'user_id', 'note'];

    public function stockOpnameList() {
        return $this->hasMany('\Modules\Inventory\StockOpnameList');
    }
    
    public function user() {
        return $this->belongsTo('\Modules\Admin\Admin');
    }

}