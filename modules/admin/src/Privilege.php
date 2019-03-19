<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\PrivilegeCategory;

class Privilege extends Model
{
    public function privilegeCategory()
    {
        return $this->belongsTo(PrivilegeCategory::class);
    }
}
