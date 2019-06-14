<?php

namespace Modules\Promo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Promocodes;
use Modules\Promo\Promocode;
use Modules\Promo\PromoCreationHandler;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class PromoApiController extends Controller
{
    
    /**
     * Create a new parameter.
     *
     * @var mixed Creation
     */
    protected $creation;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PromoCreationHandler $creation)
    {
        $this->creation = $creation;
    }

    /**
     * Create a new controller get promo list.
     *
     * @return mixed
     */
    public function getPromo(Request $request){
        return Promocodes::get();
    }
    /**
     * Create a new controller get promo single by code.
     *
     * @return mixed
     */
    public function getPromoByCode(Request $request,$code){
        return Promocodes::check($code);
    }
}
