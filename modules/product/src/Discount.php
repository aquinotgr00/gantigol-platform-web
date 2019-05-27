<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Discount extends Model
{
    use FormAccessible;

    protected $fillable = ['name', 'method', 'type', 'nominal', 'start_date', 'end_date'];

    public function discountProducts() {
        return $this->hasMany('App\DiscountProduct');
    }
    
    public function setNameAttribute(string $name)
    {

        $this->attributes['name'] = strtoupper($name);
    }

}
