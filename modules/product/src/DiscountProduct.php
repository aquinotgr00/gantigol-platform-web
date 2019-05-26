<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class DiscountProduct extends Model
{
    use FormAccessible;

    protected $fillable = ['discount_id', 'product_id'];

    public function discount() {
        return $this->belongsTo("App\Discount", 'discount_id');
    }
    
    public function currentDiscount() {
        return $this->belongsTo("App\Discount", 'discount_id')->whereRaw('now() BETWEEN start_date AND end_date');
    }

    public function product() {
        return $this->belongsTo("App\Product", 'product_id');
    }

}
