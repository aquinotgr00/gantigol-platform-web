<?php

namespace Modules\Promo;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{	
	protected $table="promocodes";
     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['minimum_payment'];
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
    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getMinimumPaymentAttribute()
    {   
        $value = str_replace(array("[","]"),"",$this->data);
        if(empty($value)){
            $value = 0;
        }

        return $value;
    }
}
