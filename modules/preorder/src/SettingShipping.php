<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;

class SettingShipping extends Model
{
    protected $fillable = [
        'width',
        'height',
        'courier',
    ];
}
