<?php

namespace Modules\Membership;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasApiTokens, Notifiable;

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
}