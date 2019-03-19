<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\RolePrivilege;

class Role extends Model
{
    public function privileges()
    {
        return $this->hasMany(RolePrivilege::class);
    }
}
