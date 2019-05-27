<?php

namespace Modules\Shipment;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name'];
    protected $hidden = ['created_at','updated_at'];
    
    public function cities() {
        return $this->hasMany('\Modules\Shipment\City');
    }
}
