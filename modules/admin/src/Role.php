<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\RolePrivilege;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    public function privileges(): HasMany
    {
        return $this->hasMany(RolePrivilege::class);
    }
}
