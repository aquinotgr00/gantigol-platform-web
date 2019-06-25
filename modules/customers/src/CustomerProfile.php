<?php

namespace Modules\Customers;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'address',
        'subdistrict_id',
        'zip_code',
        'birthdate',
        'member_discount_id',
        'last_login',
        'created_at',
        'updated_at',
        'user_id'
    ];
    
    protected $dates = ['birthdate'];
    
    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * Accessors
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
    public function getGenderAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function subdistrict()
    {
        if (class_exists('\Modules\Shipment\Subdistrict')) {
            return $this->belongsTo('\Modules\Shipment\Subdistrict');
        }
        return null;
    }
    
    public function orders()
    {
        if (class_exists('\Modules\Ecommerce\Order')) {
            return $this->hasMany('\Modules\Ecommerce\Order', 'customer_id');
        }
        return null;
    }
}
