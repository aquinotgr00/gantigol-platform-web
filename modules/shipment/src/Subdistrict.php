<?php

namespace Modules\Shipment;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','city_id'];
    protected $hidden   = ['city_id','created_at','updated_at'];
    
    public function city() {
        return $this->belongsTo('\Modules\Shipment\City');
    }
}
