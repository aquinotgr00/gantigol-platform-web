<?php

namespace Modules\ProductCategory\Http\Controllers;

use Modules\ProductCategory\ProductCategory;
use Modules\ProductCategory\Http\Requests\StoreProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('index', Auth::user());
        
        //$categories = ProductCategory::all();
        $categories = ProductCategory::whereNull('parent_id')->with('subcategories')->get();
        $data = [
            'title' => ucwords('product categories')
        ];
        return view('product-category::nassau.index', compact('categories','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Modules\ProductCategory\ProductCategory  $category
     * @return \Illuminate\View\View
     */
    public function create(ProductCategory $category)
    {
        $data = [
            'title' => ucwords('add new product categories'),
            'back' => route('product-categories.index')
        ];
        $categories = ProductCategory::all();
        return view('product-category::nassau.create', compact('data','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Modules\ProductCategory\Http\Requests\StoreProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategory $request)
    {
        $request->validated();
        $productCategory = ProductCategory::create($request->only(['name','image_id','parent_id']));
        return redirect_success('product-categories.index', 'Success', "Category {$productCategory->name} created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\ProductCategory\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\ProductCategory\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        return $this->form($productCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\ProductCategory\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        return redirect_success('product-categories.index', 'Success', "Category {$productCategory->name} updated!");
    }
    
    /**
     * Shared form for create and edit user
     *
     * @param  \Modules\Admin\Admin  $category
     * @return \Illuminate\View\View
     */
    private function form($category)
    {
        $parentCategoriesModel = ProductCategory::with('subcategories')->whereNull('parent_id');
        if($category->id) {
            $parentCategoriesModel = $parentCategoriesModel->where('','');
        }
        $data = [
            'title' => 'Add New Product Categories',
            'back' => route('product-categories.index')
        ];
        return view('product-category::nassau.edit', compact('category','data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\ProductCategory\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,int $id)
    {
        $productCategory =  ProductCategory::findOrFail($id); 
        if ($productCategory->delete()) {
            return response()->json(['data'=>1]);
        }else{
            return response()->json(['data'=>0]);
        }
    }
}
