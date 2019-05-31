<?php

namespace Modules\Promo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Promocodes;
use Modules\Promo\Promocode;
use Modules\Promo\PromoCreationHandler;
use Yajra\Datatables\Datatables;

class PromoController extends Controller
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
     * Displays promotion list front end view
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $data['title'] = 'Promo';
    	return view('promo::promo.list',compact('data')); 
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {   
        $list =  Promocode::get();
        return Datatables::of($list)
        				 ->addColumn('type', function ($list) {
        				 	$value="Multiple";
        				 	if($list->is_disposable){
        				 		$value="Single";
        				 	}
                                return  $value ;
                            })
                             ->addColumn('action', function ($list) {
                                return  '<a href="'.Route('banner.edit',$list->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                        <a href="'.Route('banner.delete',$list->id).'" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>' ;
                            })
                            ->make(true);
    }
    /**
     * Displays promo creating form front end view
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        $data = [
            'title' => ucwords('Create Promo'),
            'back' => route('promo.index')
        ];
    	return view('promo::promo.create',compact('data')); 
    }

    /**
     * function handling creating Promo
     *
     * @return mixed
     */
    public function createPromo(Request $request){
    	if(is_null($request->code)){
    		$result = $this->autoGeneratePromo($request);
    		return redirect()->route('promo.index');
    	}
    	$result = $this->manualGeneratePromo($request);

    	return redirect()->route('promo.index');
    }

    /**
     * auto generated code for promo 
     *
     * 
     */
    public function autoGeneratePromo($request):void 
    {
    	switch ($request->type) {
			    case "single":
			        $result = $this->creation->createSinglePromoAuto($request);
			        break;
			    case "multiple":
			       	$result = $this->creation->createMultiplePromoAuto($request);
			        break;
			    default:
			     $result = $this->creation->createMultiplePromoAuto($request);
			}

    }

     /**
     * manual user generated promo
     *
     * 
     */
    public function manualGeneratePromo($request):void 
    {
    	switch ($request->type) {
			    case "single":
			        $result = $this->creation->createSinglePromo($request);
			        break;
			    case "multiple":
			       	$result = $this->creation->createMultiplePromo($request);
			        break;
			    default:
			    $result = $this->creation->createMultiplePromo($request);
			}

    }
}
