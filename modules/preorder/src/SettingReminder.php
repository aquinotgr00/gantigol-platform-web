<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SettingReminder extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'repeat',
        'interval',
        'daily_at'
    ];
    /**
     *
     * @return  mixed
     */
    public static function getCurrentSetting()
    {
        if (Auth::check()) {
            return static::where('user_id', Auth::user()->id)->first();
        } else {
            return false;
        }
    }
}
