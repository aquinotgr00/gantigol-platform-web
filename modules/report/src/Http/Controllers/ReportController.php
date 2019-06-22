<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\ProductVariantAttribute;
use Yajra\Datatables\Datatables;
use Spatie\Searchable\Search;
use Carbon\Carbon;

class ReportController extends Controller
{

    /**
     * Create a new controller report sales list.
     *
     * @return mixed
     */
   public function index(Request $request){
        $data['title'] = 'Report Sales';
        return view('report::sales.index',compact("data"));
   }
   /**
     * Create a new controller report variant list.
     *
     * @return mixed
     */
   public function indexVariant(Request $request){
        $data['title'] = 'Report Variants';
        $variants = ProductVariantAttribute::all();
        return view('report::variants.index',compact("data","variants"));
   }
}
