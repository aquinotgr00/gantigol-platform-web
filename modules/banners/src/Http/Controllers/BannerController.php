<?php

namespace Modules\Banners\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banners\Banner;
use Modules\Banners\BannerCategory;
use Modules\Medias\Content;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;
use Gate;

class BannerController extends Controller
{
    /**
     * Create a new parameter.
     *
     * @var mixed medias
     */
    protected $medias;   
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
    public function __construct(Content $mediaModel, Banner $banner,BannerCategory $banner_category)
    {
        $this->banner = $banner;
        $this->banner_category = $banner_category;
        $this->medias = $mediaModel;
    }
	/**
     * view function Banner list.
     *
     *
     * @return mixed
     */
    public function index(){
    	$data['title'] = "Banner";
        $category = $this->banner_category->get();
    	return view('banners::banner.list',compact('data','category'));
    }

    /**
     * view function Banner Creating.
     *
     *
     * @return mixed
     */
    public function indexCreate(){
        $data = [
            'title' => ucwords('Create Banner'),
            'back' => route('banner.index')
        ];
        $media = $this->medias->getMediaPaginate();
    	$category = $this->banner_category->get();
    	return view('banners::banner.create',compact('data','category','media'));
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
        $media = $this->medias->getMediaPaginate();
    	$category = $this->banner_category->get();
    	$result = $this->banner->find($id);
    	return view('banners::banner.edit',compact('data','category','result','media'));
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
                ->orderBy('banners.created_at', 'desc')
        		->get();
        return Datatables::of($list)
                             ->addColumn('action', function ($list) {
                                if (Gate::allows('edit-banner')) {
                                return  '<a href="'.Route('banner.edit',$list->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                        <a href="'.Route('banner.delete',$list->id).'" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>' ;
                                }
                                return '';
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
            'url'=>'required',
            'image'=>'required',
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
      
        return redirect()->route('banner.index');
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

    /**
     * Process list api  request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listApi($category,$limit)
    {   
        $list =  $this->banner->whereNull('banners.deleted_at')
                ->where('banner_category.name',$category)
                ->leftjoin('banner_category','banner_category.id','=','banners.placement')
                ->orderby('banners.created_at','desc')
                ->select('banners.*','banner_category.name as placement_name')
                ->limit($limit)
                ->get();
        return json_encode($list);
    }
}
