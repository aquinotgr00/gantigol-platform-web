<?php

namespace Modules\Membership;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Gabievi\Promocodes\Traits\Rewardable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;

class Member extends Authenticatable
{
    use HasApiTokens, Notifiable, Rewardable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone',
        'address',
        'gender',
        'dob',
        'subdistrict',
        'city',
        'province',
        'verified',
        'postal_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /**
     * Global Scope - default order is latest
     */
    protected static function boot()
    {
        parent::boot();
        
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->latest();
        });
    }
    
    /**
     * Get the member's name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
    /**
     * Get the member's address.
     *
     * @param  string  $value
     * @return string
     */
    public function getAddressAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * find user by username or email using passport
     *
     * @param  mixed $identifier
     *
     * @return mixed
     */
    public function findForPassport($identifier)
    {
        return $this->orWhere('email', $identifier)->orWhere('username', $identifier)->first();
    }

    /**
     * find user token
     *
     * @param  int $id
     *
     * @return mixed
     */
    public function findForTokenAccess($id)
    {
        return $this->where('id', $id)->first();
    }

    /**
     * find user token verification
     *
     * @param  int $id
     *
     * @return bool
     */
    public function memberVerification($id)
    {
        return $this->where('id', $id)
                    ->update(['verification'=>'verified']);
    }
    
    public function customer()
    {
        if (class_exists('\Modules\Customers\CustomerProfile')) {
            return $this->hasOne('\Modules\Customers\CustomerProfile', 'user_id');
        }
    }
}
