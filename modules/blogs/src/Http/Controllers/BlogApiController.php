<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Modules\Blogs\Blog;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class BlogApiController extends Controller
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
     * Create a new controller get data one lpost.
     *
     * @return mixed
     */
    public function getOnePost($id){
    	$post = $this->blogs->find($id);
    	$tag = $tagged = $post->tagged;
    	$data =[
    		'blog'=>$post,
    		'tag' =>$tag
    	]; 

    	return json_encode($data);
    }

    /**
     * Create a new controller get data many post with tag.
     *
     * @return mixed
     */
    public function getManyPostWithtag($tag,$limit = 20){
    	$post = $this->blogs->withAnyTag($tag)->limit($limit)->get();
    	return json_encode($post);
    }
}
