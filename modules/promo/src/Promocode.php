<?php

namespace Modules\Promo;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{	
	protected $table="promocodes";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'reward',
        'data',
        'is_disposable',
        'expires_at',
        'data',
    ];
}
