<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Privilege;

class AdminPrivilege extends Model
{
    protected $fillable = ['privilege_id'];
    
    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }
}
