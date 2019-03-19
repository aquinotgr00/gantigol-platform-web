<?php

namespace Modules\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Admin\AdminPrivilege;
use Modules\Admin\Role;
class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['name', 'email', 'role_id', 'password','active'];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setPasswordAttribute($pass){

        $this->attributes['password'] = bcrypt($pass);

    }
    
    public function privileges()
    {
        return $this->hasMany(AdminPrivilege::class);
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class)->withDefault(['name'=>'Custom']);
    }
}
