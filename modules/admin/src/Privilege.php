<?php

namespace Modules\Admin;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\PrivilegeCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Privilege extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'privilege_category_id'];
    
    public function privilegeCategory(): BelongsTo
    {
        return $this->belongsTo(PrivilegeCategory::class);
    }
}
