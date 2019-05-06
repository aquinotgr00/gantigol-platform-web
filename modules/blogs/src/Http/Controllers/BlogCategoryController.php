<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Illuminate\Support\Collection;

class BlogCategoryController extends Controller
{	
	/**
     * Create a new parameter.
     *
     * @var mixed blogcategory
     */
	protected $blogcategory;
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BlogCategory $blogcategory)
    {
    	$this->blogcategory = $blogcategory;
    }

    /**
     * view function Blog Category list blog.
     *
     *
     * @return mixed
     */
	public function index(){
		$list = $this->blogcategory->paginate(15);;

		return view('blogs::blog-category', compact('list'));

	}

	 /**
     * view function Blog Category to create category blog.
     *
     *
     * @return mixed
     */
    public function indexFormCategory($id = null){
    	if(is_null($id)){
    		return view('blogs::blog-category-new');
    	}
    	$data = $this->blogcategory->find($id);
    	return view('blogs::blog-category-edit',compact('data'));
    }

    /**
     * view function store blog category.
     * @param \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function actionPostCategory(Request $request){
    	$data=['message'=>'Failed to create new category' ];
    	$request->validate([
						    'name' => 'required|max:32:|unique:blog_category'
						]);
    	if(!empty($request->id)){
    		$result =  $this->blogcategory->where('id',$request->id)->update($request->except(['_token','id']));
    		if($result){
    		$data=['message'=>'Success to Edit '.$request->name.' category' ];
    		}
    		return redirect()->route('blog.category.index');
    	}
    	$result =  $this->blogcategory->insert($request->except(['_token']));
    	if($result){
    		$data=['message'=>'Success to create new category' ];
    	}
    	return redirect()->route('blog.category.index');
    }
}
