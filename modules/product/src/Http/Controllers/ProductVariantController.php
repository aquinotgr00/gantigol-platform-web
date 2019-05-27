<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Product;
use Modules\Product\ProductVariant;

function combinations($arrays, $i = 0)
{
    if (!isset($arrays[$i])) {
        return array();
    }
    if ($i == count($arrays) - 1) {
        return $arrays[$i];
    }

    // get combinations from subsequent arrays
    $tmp = combinations($arrays, $i + 1);

    $result = array();

    // concat each array from tmp with each element from $arrays[$i]
    foreach ($arrays[$i] as $v) {
        foreach ($tmp as $t) {
            $result[] = is_array($t) ?
            array_merge(array($v), $t) :
            array($v, $t);
        }
    }

    return $result;
}

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Product Variants';
        return view("product::product-variant.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add New Product';
        $data['back'] = route('product-variant.index');
        return view("product::product-variant.create", compact('data'));
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
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
        ]);
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
        ]);

        if ($request->has('tags')) {
            $this->insertTags($request, $product);
        }

        if ($request->has('keyword')) {
            $keywords = explode(',', $request->keyword);
            foreach ($keywords as $key => $value) {
                $product->tag($value);
            }
        }

        $combinations = [];
        if ($request->has('variant')) {
            $catch = array();
            foreach ($request->variant as $key => $value) {
                $catch[] = $value;
            }
            $combinations = combinations($catch);
            foreach ($combinations as $key => $value) {
                $variant = implode(' ', $value);
                $productVariant = ProductVariant::create([
                    'product_id' => $product->id,
                    'size_code' => '',
                    'variant' => $variant,
                ]);
            }
        }
        if (!is_null($product->images->first())) {
            $product->update([
                'image' => $product->images->first()->image,
            ]);
        }
        return redirect()->route('product-variant.show', $product->id);
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
            'back' => route('product-variant.index'),
        ];
        return view("product::product-variant.show", compact('product', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $productVariant = ProductVariant::findOrFail($id);
        $productVariant->product;
        $data = [
            'title' => ucwords($productVariant->product->name),
            'back' => route('product-variant.index'),
        ];
        return view("product::product-variant.edit", compact('productVariant', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'variant' => 'required',
            'size_code' => 'required',
        ]);
        $productVariant = ProductVariant::findOrFail($id);
        $productVariant->update([
            'variant' => $request->variant,
            'size_code' => $request->size_code,
            'sku' => $request->sku,
            'description' => $request->description,
            'price' => $request->price,
            'quantity_on_hand' => $request->quantity_on_hand,
            'safety_stock' => $request->safety_stock
        ]);
        return redirect()->route('product-variant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
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
}
