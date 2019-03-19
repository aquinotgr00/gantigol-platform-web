<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Privilege;

class PrivilegeCategory extends Model
{
    public function privileges()
    {
        return $this->hasMany(Privilege::class);
    }
}
