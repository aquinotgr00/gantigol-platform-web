<?php

namespace Modules\Banners\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banners\Banner;
use Modules\Banners\BannerCategory;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;


class BannerPlacementController extends Controller
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
     * view function Banner Placement list.
     *
     *
     * @return mixed
     */
    public function index(){
    	$data['title'] = "Banner Placement";
    	return view('banners::category.list',compact('data'));
    }

    /**
     * view function Edit Banner Placement list.
     *
     *
     * @return mixed
     */
    public function indexUpdate($id){
        $data = [
            'title' => ucwords('Update Banner Placement'),
            'back' => route('banner-category.index')
        ];
        $result = $this->banner_category->find($id);
        return view('banners::category.edit',compact('data','result'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {   
        $list =  $this->banner_category->whereNull('deleted_at')->get();
        return Datatables::of($list)
                    ->addColumn('count', function ($list) {
                            $count = $this->banner->where('Placement', $list->id)->count();
                                return  $count;
                            })
                             ->addColumn('action', function ($list) {
                                return  '<a href="'.Route('banner-category.edit',$list->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>' ;
                            })
                            ->make(true);
    }

    /**
     * update a data created Placement resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        $request->validate([
            'name' => 'required',
        ]);
        $this->banner_category->where('id',$id)->update($request->except(['_token']));
      
        return redirect()->route('banner-category.edit',$id);
    }

    /**
     * delet a data created Placement resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {   
        if( $this->banner_category->count >1)
        $this->banner_category->where('id',$id)->delete();
      
        return redirect()->route('banner.category.index');
    } 
}
