<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Modules\Blogs\Blog;
use Yajra\Datatables\Datatables;
use Spatie\Searchable\Search;
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
    public function getOnePost($id)
    {
        $post = $this->blogs
        ->leftjoin('blog_category', 'blog_category.id', '=', 'blogs.category_id')
        ->whereNotNull('blogs.publish_date')
        ->where('blogs.show','show')
        ->select('blogs.*', 'blog_category.name as category_name')
        ->with('tagged')
        ->find($id);
        $post->increment('counter');
        $data =[
            'blog'=>$post
        ];

        return json_encode($data);
    }

    /**
     * Create a new controller get data many post with tag.
     *
     * @return mixed
     */
    public function getManyPostWithTag(Request $request, $limit = 20)
    {
        $post = $this->blogs->where('blogs.show','show')->whereNotNull('blogs.publish_date')->withAnyTag($request->tag)->orderBy('created_at', 'desc')->paginate($limit);
        return json_encode($post);
    }

    /**
     * Create a new controller get recent data many post without tag using category.
     *
     * @return mixed
     */
    public function getManyPostWithCategories(Request $request, $name, $limit = 3)
    {
        $data['post'] = $this->blogs
        ->where('blogs.show','show')
        ->whereNotNull('blogs.publish_date')
        ->leftjoin('blog_category', 'blog_category.id', '=', 'blogs.category_id')
        ->where('blog_category.name', $name)
        ->orderBy('blogs.created_at', 'desc')
        ->select('blogs.*','blog_category.name')
        ->paginate($limit);
        
        $data['highlight']= $this->blogs->where('highlight','yes')
        ->whereNotNull('publish_date')
        ->where('blogs.show','show')
        ->leftjoin('blog_category', 'blog_category.id', '=', 'blogs.category_id')
        ->where('blog_category.name', $name)
        ->select('blogs.*','blog_category.name')
        ->first();
        return json_encode($data);
    }

    /**
     * Create a new controller get five hot post.
     *
     * @return mixed
     */
    public function getHotPost(Request $request, $limit = 5 )
    {
        $data= $this->blogs
        ->whereNull('deleted_at')
        ->whereNotNull('publish_date');
        if($request->has(['startdate', 'enddate'])){
         $data = $data->whereBetween('created_at',[$request->startdate,$request->enddate]);
        }
        $data = $data->orderBy('blogs.counter', 'desc')
        ->limit($limit)
        ->select('title','id','image','counter')
        ->get();
        return json_encode($data);
    }


    /**
     * Create a new controller get recent data many post using feature search.
     *
     * @return mixed
     */
    public function getPostAndProductBySearch($key)
    {
        $searchResults = (new Search())
           ->registerModel(Blog::class, ['title','created_at'])
           ->search($key);

        return json_encode($searchResults);
    }
}
