<?php

namespace Modules\Promo;

use Modules\Promo\PromoCodeModel;
class PromoCreationHandler
{	
	
	/**
     * Function creating single promo
     *
     * @return mixed
     */
    public function CreateSinglePromo($request){
    	return PromoCodeModel::create([
    		'code'=>$request->code,
    		'reward'=>$request->reward,
    		'data'=>json_encode([]),
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

    	return PromoCodeModel::create([
    		'code'=>$request->code,
    		'reward'=>$request->reward,
    		'data'=>json_encode([]),
    		'expires_at'=>$request->expires_at
    		]);
    }

}
