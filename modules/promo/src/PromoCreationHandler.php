<?php

namespace Modules\Promo;

use Promocodes;
use Modules\Promo\Promocode;
class PromoCreationHandler
{	  
	
    /**
     * Function creating single promo
     *
     * @return mixed
     */
    public function CreateSinglePromo($request){
       return Promocode::create([
           'code'=>$request->code,
           'reward'=>$request->reward,
           'data'=>'[]',
           'is_disposable'=>1,
           'expires_at'=>$request->expires_at
           ]);

    }

    /**
     * Function creating multiple promo
     *
     * @return mixed
     */
    public function CreateMultiplePromo($request){

       return Promocode::create([
           'code'=>$request->code,
           'reward'=>$request->reward,
           'data'=>'[]',
           'expires_at'=>$request->expires_at
           ]);
    }
    /**
     * Function creating single promo auto generated code
     *
     * @return mixed
     */
    public function createSinglePromoAuto($request){
        return Promocodes::create(1,$request->reward, [],$request->expires_at);

    }

    /**
     * Function creating multiple promo auto generated code
     *
     * @return mixed
     */
    public function createMultiplePromoAuto($request){

        return Promocodes::createDisposable(1,$request->reward,[],$request->expires_at);

    }
}
