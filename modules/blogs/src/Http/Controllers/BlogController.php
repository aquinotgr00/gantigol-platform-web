<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Modules\Blogs\Blog;
use Modules\Medias\Content;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class BlogController extends Controller
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
     * @var mixed blogs
     */
    protected $blogs;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Content $mediaModel, Blog $blogs)
    {
        $this->blogs = $blogs;
        $this->medias = $mediaModel;
    }

    /**
     * Displays blog post front end view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['title'] = 'Post';
        return view('blogs::post.list', compact('data'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $blogs = $this->blogs->leftjoin('blog_category', 'blogs.category_id', '=', 'blog_category.id')
                ->select('blogs.*', 'blog_category.name')
                ->get();
        return Datatables::of($blogs)
                            ->addColumn('create_date', function ($blogs) {
                                return date_format($blogs->created_at, "d-m-Y");
                            })
                            ->addColumn('published_date', function ($blogs) {
                                $published ='';
                                if (!empty($blogs->publish_date)) {
                                    $published = date_format(date_create($blogs->publish_date), "d-m-Y");
                                }
                                return $published;
                            })
                             ->addColumn('action', function ($blogs) {
                                $data=[
                                        'button'=>'hide-table',
                                        'route'=>Route('blog.post.show', $blogs->id),
                                        'title' => 'Show On Website'
                                    ];
                                if($blogs->show == "show"){
                                    $data=[
                                        'button'=>'show-table',
                                        'route'=>Route('blog.post.hide', $blogs->id),
                                        'title' => 'Hide On Website'
                                    ];
                                }
                                return  '<a href="'.Route('blog.post.edit', $blogs->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                        <a href="'.$data["route"].'" class="btn btn-table circle-table '.$data["button"].'" data-toggle="tooltip" data-placement="top" title="'.$data['title'].'"></a>';
                             })
                            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => ucwords('Create Post'),
            'back' => route('blog.index')
        ];
        $categories = BlogCategory::all();
        $media = $this->medias->getMediaPaginate();
        return view('blogs::post.create', compact('categories', 'data','media'));
    }

    /**
     * Show form editing blog post front end view
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $data = [
            'title' => ucwords('Edit Post'),
            'back' => route('blog.index')
        ];
        $categories = BlogCategory::all();
        $post = $this->blogs->where('id', $id)->first();
        $media = $this->medias->getMediaPaginate();
        $data['title'] = 'Edit Post '.$post->title;
        $tags = $post->tagNames();
        return view('blogs::post.edit', compact('post', 'categories', 'tags', 'id', 'data','media'));
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
            'category_id' => 'required',
        ]);
        $blog = $this->blogs->create($request->except(['id','_token','tags']));
        if ($request->has('tags')) {
            $this->insertTags($request, $blog);
        }
        $request->session()->flash('message', 'Post has been created');
        return redirect()->route('blog.index');
    }

    /**
     * edit a post created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);
        $this->blogs->where('id', $request->id)->update($request->except(['id','_token','tags']));
        $blog = $this->blogs->where('id', $request->id)->first();
        if ($request->has('tags')) {
            $this->insertTags($request, $blog);
        }
        $request->session()->flash('message', 'Post has been updated');
        return redirect()->route('blog.post.edit', $request->id);
    }

    /**
     * publish a  post  resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'body' =>'required',
            // 'image'=>'required',
        ]);
        $request->request->add(['publish_date' => Carbon::now()]);
        if (!empty($id)) {
            $this->blogs->where('id', $request->id)->update($request->except(['id','_token','tags']));
            $blog = $this->blogs->where('id', $request->id)->first();
        }
        
        if ($request->has('tags')) {
            $this->insertTags($request, $blog);
        }
        $request->session()->flash('message', 'Post has been published');
        return redirect()->route('blog.index');
    }

     /**
     * create a tag post created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function insertTags($request, $data)
    {
        $array = explode(",", $request->tags);
        $data->retag($array);
    }

    /**
     * hide a  post  from frontend.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hide( $id )
    {
       $blog = $this->blogs->find($id);
       $blog->show = "hide";
       $blog->save();
        return redirect()->route('blog.index');
    }
    /**
     * hide a  post  from frontend.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
       $blog = $this->blogs->find($id);
       $blog->show = "show";
       $blog->save();
        return redirect()->route('blog.index');
    }
}
