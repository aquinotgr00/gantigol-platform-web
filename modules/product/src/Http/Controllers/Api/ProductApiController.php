<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Product\Http\Resources\ProductResource;
use Modules\Product\Product;
use Modules\Product\ProductImage;
use Modules\Product\ProductVariant;
use Validator;

class ProductApiController extends Controller
{
    private $n_pages;

    public function __construct(){
        $this->n_pages = 6;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with('variants')
        ->with('preOrder')
        ->where('visible',1)
        ->where('status',1)
        ->orderBy('created_at', 'desc')
        ->paginate($this->n_pages);

        if ($request->has('keyword')) {
            $products = Product::where('name', 'like', '%'.$request->keyword.'%')
            ->orWhere('description', 'like', '%'.$request->keyword.'%')
            ->with('variants')
            ->with('preOrder')
            ->where('visible',1)
            ->where('status',1)
            ->get();
        }

        if ($request->has('tags')) {
            
            $tags = explode(',',$request->tags);

            $products = Product::withAnyTag($tags)
            ->with('variants')
            ->with('preOrder')
            ->where('visible',1)
            ->where('status',1)
            ->get();
        }

        if ($request->has('category_id')) {
            $products = Product::where('category_id',$request->category_id)
            ->with('variants')
            ->with('preOrder')
            ->where('visible',1)
            ->where('status',1)
            ->get();
        }
        
        foreach ($products as $key => $value) {
            foreach ($value->tags as $index => $tag) {
                $tag->name;
            }
        }

        foreach ($products as $key => $value) {
            $value->category->sizeChart;
        }
        
        return new ProductResource($products);
    }
    /**
     *
     * @param integer $id
     * @return void
     */
    public function show(int $id)
    {
        $product = Product::with('variants')
        ->with('preOrder')
        ->where('visible',1)
        ->where('status',1)
        ->where('id',$id)
        ->first();

        $product->tags;

        $product->category->sizeChart;

        return new ProductResource($product);
    }
}
