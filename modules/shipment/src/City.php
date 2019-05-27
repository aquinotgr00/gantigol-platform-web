<?php

namespace Modules\Shipment;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','city_type','province_id','postal_code'];
    protected $hidden = ['province_id','created_at','updated_at'];
    
    public function province() {
        return $this->belongsTo('\Modules\Shipment\Province');
    }
    
    public function subdistricts() {
        return $this->hasMany('\Modules\Shipment\Subdistrict');
    }
}
