<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blogs\BlogCategory;
use Modules\Blogs\Blog;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;

class BlogCategoryController extends Controller
{
   
    /**
     * Create a new parameter.
     *
     * @var mixed blogcategory
     */
    protected $blogcategory;
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
    public function __construct(BlogCategory $blogcategory, Blog $blogs)
    {
        $this->blogcategory = $blogcategory;
        $this->blogs = $blogs;
    }

    /**
     * view function Blog Category list blog.
     *
     *
     * @return mixed
     */
    public function index()
    {

        $data['title'] = 'Post Category';
        return view('blogs::category.list', compact('data'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $category =  $this->blogcategory->get();
        return Datatables::of($category)
                        ->addColumn('count', function ($category) {
                            $count = $this->blogs->where('category_id', $category->id)->count();
                                return  $count;
                        })
                             ->addColumn('action', function ($category) {
                                return  '<a href="'.Route('blog.category.edit', $category->id).'" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                        <a href="'.Route('blog.category.edit', $category->id).'" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>' ;
                             })
                            ->make(true);
    }
     /**
     * view function Blog Category to create category blog.
     *
     *
     * @return mixed
     */
    public function indexFormCategory($id = null)
    {
        $data = [
            'title' => ucwords('Update Post Category'),
            'back' => route('blog.category.index')
        ];
        if (is_null($id)) {
            $data['title'] = ucwords('Create Post Category');
            return view('blogs::category.create', compact('data'));
        }
        $category = $this->blogcategory->find($id);
        return view('blogs::category.edit', compact('data', 'category'));
    }

    /**
     * view function store blog category.
     * @param \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function actionPostCategory(Request $request)
    {
        $data=['message'=>'Failed to create new category' ];
        $request->validate([
                            'name' => 'required|max:32:|unique:blog_category'
                        ]);
        if (!empty($request->id)) {
            $result =  $this->blogcategory->where('id', $request->id)->update($request->except(['_token','id']));
            if ($result) {
                $data=['message'=>'Success to Edit '.$request->name.' category' ];
            }
            return redirect()->route('blog.category.index');
        }
        $result =  $this->blogcategory->insert($request->except(['_token']));
        if ($result) {
            $data=['message'=>'Success to create new category' ];
        }
        return redirect()->route('blog.category.index');
    }
}
