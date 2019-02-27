<?php

namespace Modules\Membership;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Accesstoken extends Model
{
    protected $table = "access_token";

     protected $fillable = [
       'member_id',
       'token',
       'expired_at'
    ];
    public function verifiedToken($token){
    	return $this->where('token',$token)->where('expired_at',">=",Carbon::now())->first();
    }

    public function expiringToken($token){
        return $this->where('token',$token)
        			->where('expired_at',">=",Carbon::now())
                    ->update([
                            'expired_at'=>Carbon::now()
                        ]);
    }
}
