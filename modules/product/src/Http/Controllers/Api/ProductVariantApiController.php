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
        return response()->json($request->all());
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

    public function getProductVariantById(Request $request)
    {
        $id = $request->input("id");

        if (!empty($id)) {
            $productVariants = ProductVariant::with(['product.category.parentCategories'])->where('id', $id)->first();

            if (!empty($productVariants)) {
                $image = url('res/300/auto/' . $productVariants->product->image);

                $data = array('image' => $image, 'stock' => $productVariants->quantity_on_hand, 'product_name' => "{$productVariants->product->name} - {$productVariants->variant} - {$productVariants->sku}");

                $data = array('status' => true, 'msg' => "Success", "data" => $data);
            } else {
                $data = array('status' => false, 'msg' => "Not Found Product Variant with ID {$id}.", "data" => array());
            }
        } else {
            $data = array('status' => false, 'msg' => "Not Found Product Variant ID.", "data" => array());
        }

        return $data;
    }
}
