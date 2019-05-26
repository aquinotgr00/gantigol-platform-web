<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Http\Resources\ProductResource;
use Modules\Product\Product;
use Modules\Product\ProductProperties;
use Modules\Product\ProductVariant;
use Validator;

class ProductVariantApiController extends Controller
{
    public function index()
    {
        $productVariant = ProductVariant::with('product')->paginate(25);
        return new ProductResource($productVariant);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }

    public function storeAtribute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'attribute' => 'required',
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return new ProductResource($validator->messages());
        }
        $productProperties = ProductProperties::create([
            'attribute' => $request->attribute,
            'value' => $request->value,
        ]);
        return new ProductResource($productProperties);
    }

    public function getAtribute()
    {
        $productProperties = ProductProperties::all();
        return new ProductResource($productProperties);
    }
}
