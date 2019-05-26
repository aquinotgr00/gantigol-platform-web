<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Product';
        return view("product::product.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => ucwords('add new product'),
            'back' => route('product.index')
        ];

        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $productCategory  = new \Modules\ProductCategory\ProductCategory;
            $data['categories'] = $productCategory->parentCategory();
        }
        return view("product::product.create",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'sku' => 'array'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        $product = Product::create([
            'name' =>  $request->name,
            'description' =>  $request->description,
            'price' =>  $request->price,
            'weight' =>  $request->weight,
            'status' => $request->status
        ]);
        
        foreach ($request->sku as $key => $value) {
            $productVariant = ProductVariant::create([
                'product_id' => $product->id,
                'sku' => $request->sku[$key],
                'size_code' => $request->size_code[$key]
            ]);
        }
        $product->variants;
        $product->images;
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'title' => ucwords($product->name),
            'back' => route('product.index')
        ];
        return view("product::product.show",compact('product','data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        
    }
}
