<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Http\Resources\ProductResource;
use Modules\Product\Product;
use Modules\Product\ProductVariant;

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
            $limit = 4;
            if ($request->has('limit')) {
                $limit = intval($request->limit);
            }

            $tags = explode(',',$request->tags);

            $products = Product::withAnyTag($tags)
            ->with('variants')
            ->with('preOrder')
            ->where('visible',1)
            ->where('status',1)
            ->limit($limit)
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

        if ($request->has('price')) {
            if (in_array($request->price,array('asc','desc'))) {
                $products = Product::with('variants')
                ->with('preOrder')
                ->where('visible',1)
                ->where('status',1)
                ->orderBy('price',$request->price)
                ->get();
            }
        }
        
        foreach ($products as $key => $value) {
            foreach ($value->tags as $index => $tag) {
                $tag->name;
            }
        }

        foreach ($products as $key => $value) {
            if (isset($value->category)) {
                $value->category;
            }

            if (isset($value->category->sizeChart)) {                
                $value->category->sizeChart;
            }
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
        ->with('tagged')
        ->where('visible',1)
        ->where('status',1)
        ->where('id',$id)
        ->first();
        /*
        if (isset($product->tags)) {
            $product->tags;

            $tags = [];
            foreach ($product->tags as $key => $value) {
                $tags[] = $value->name;
            }
            $related = Product::withAnyTag($tags)
                        ->limit(3)
                        ->get();
                        
            $product->related = $related;
            $product->related;
        }*/

        if (isset($product->category)) {
            $product->category;
        }

        if (isset($product->category->sizeChart)) {
            $product->category->sizeChart;
        }

        if (isset($product->images)) {
            $product->images;
        }

        return new ProductResource($product);
    }
    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function showProductVariant(Request $request)
    {
        $id = $request->input("id");

        if (!empty($id)) {
            $productVariants = ProductVariant::with(['product.category.parentCategory'])->where('id', $id)->first();

            if (!empty($productVariants)) {
                $data = array(
                    'image' => (isset($productVariants->product->image))? $productVariants->product->image : '#', 
                    'stock' => $productVariants->quantity_on_hand,
                    'product_name' => "{$productVariants->product->name} - {$productVariants->variant} - {$productVariants->sku}",
                    'variant' => $productVariants->variant,
                    'price'=> $productVariants->price
                );

                $data = array('status' => true, 'msg' => "Success", "data" => $data);
            } else {
                $data = array('status' => false, 'msg' => "Not Found Product Variant with ID {$id}.", "data" => array());
            }
        } else {
            $data = array('status' => false, 'msg' => "Not Found Product Variant ID.", "data" => array());
        }

        return $data;
    }
    /**
     *
     * @return void
     */
    public function getLastest(Request $request)
    {
        $limit = 4;
        if ($request->has('limit')) {
            $limit = intval($request->limit);
        }
        $products = Product::with('variants')
        ->orderBy('created_at','DESC')
        ->orderBy('name','ASC')
        ->with('preOrder')
        ->where('visible',1)
        ->where('status',1)
        ->limit($limit)
        ->get();

        foreach ($products as $key => $value) {
            if (isset($value->category)) {
                $value->category;
            }
            
            if (isset($value->category->sizeChart)) {                
                $value->category->sizeChart;
            }
        }

        return new ProductResource($products);
    }
}
