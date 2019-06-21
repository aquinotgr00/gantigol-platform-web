<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Modules\Blogs\Blog;
use Yajra\Datatables\Datatables;
use Spatie\Searchable\Search;
use Carbon\Carbon;

class ReportController extends Controller
{

    /**
     * Create a new parameter.
     *
     * @var mixed blogs
     */
    protected $blogs;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Blog $blogs)
    {
        $this->blogs = $blogs;
    }

    /**
     * Create a new controller report sales list.
     *
     * @return mixed
     */
   public function index(Request $request){
        $data['title'] = 'Report Sales';
        return view('report::sales.index',compact("data"));
   }
}
