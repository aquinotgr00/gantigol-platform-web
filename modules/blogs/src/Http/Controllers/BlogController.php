<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;

class BlogController extends Controller
{
    public function index(){
    	return "Blogs";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::all();
        return view('admin.pages.post.create')->with('categories',$categories); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $input = $request->all();
        $input['publish_date'] = \Carbon\Carbon::now();
        if($request->hasFile('image')) {
            $input['image'] = $this->uploadAndResize('images/post', $request->image);
        }
        Post::create($input); 
        Session::flash('message', "Post has been created");
        return redirect()->route('posts.index');
    }
}
