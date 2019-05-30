<?php

namespace Modules\Banners\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banners\Banner;
use Modules\Banners\BannerCategory;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;


class BannerController extends Controller
{
    
    /**
     * Create a new parameter.
     *
     * @var mixed banner
     */
    protected $banner;
    /**
     * Create a new parameter.
     *
     * @var mixed banner
     */
    protected $banner_category;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Banner $banner,BannerCategory $banner_category)
    {
        $this->banner = $banner;
        $this->banner_category = $banner_category;
    }
	/**
     * view function Banner list.
     *
     *
     * @return mixed
     */
    public function index(){
    	$data['title'] = "Banner";
    	return view('banners::banner.list',compact('data'));
    }

    /**
     * view function Banner Creating.
     *
     *
     * @return mixed
     */
    public function indexCreate(){
    	$data['title'] = "Create Banner";
    	$category = $this->banner_category->get();
    	return view('banners::banner.create',compact('data','category'));
    }

    /**
     * view function Banner Updating.
     *
     *
     * @return mixed
     */
    public function indexUpdate($id){
    	$data = [
            'title' => ucwords('Update Banner'),
            'back' => route('banner.index')
        ];
    	$category = $this->banner_category->get();
    	$result = $this->banner->find($id);
    	return view('banners::banner.edit',compact('data','category','result'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {   
        $list =  $this->banner->whereNull('banners.deleted_at')
        		->leftjoin('banner_category','banner_category.id','=','banners.placement')
        		->select('banners.*','banner_category.name as placement_name')
        		->get();
        return Datatables::of($list)
                             ->addColumn('action', function ($list) {
                                return  '<a href="'.Route('banner.edit',$list->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                        <a href="'.Route('banner.delete',$list->id).'" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>' ;
                            })
                            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'placement' => 'required',
            'sequence'=>'required'
        ]);

        $this->banner->create($request->except(['_token']));
      
        return redirect()->route('banner.index');
    }

    /**
     * update a data created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        $request->validate([
            'title' => 'required',
            'placement' => 'required',
            'image'=>'required',
            'sequence'=>'required'
        ]);
        $this->banner->where('id',$id)->update($request->except(['_token']));
      
        return redirect()->route('banner.edit',$id);
    }
    /**
     * update a data created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {   
       
        $this->banner->where('id',$id)->delete();
      
        return redirect()->route('banner.index');
    }  
}
