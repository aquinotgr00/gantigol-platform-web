<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Product\ProductVariantAttribute;
use DataTables;
use Validator;

class ProductAttributeController extends Controller
{
    public function index()
    {
        return view('product::product-variant.index');
    }
    
    public function create()
    {
        $data = [
            'title'=>'Add New Product Variant',
            'back'=> route('product-variant.index'),
        ];
        return view('product::product-variant.create',compact('data'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'attribute' => 'required',
            'value' => 'required',
        ]);
        $productVariant = ProductVariantAttribute::create($request->except('_token'));
        return redirect()->route('product-variant.index');
    }

    public function show(int $id)
    {
        $productVariant = ProductVariantAttribute::findOrFail($id);
        $data = [
            'title'=>'Details Product Variant',
            'back'=> route('product-variant.index'),
        ];
        return view('product::product-variant.show',compact('productVariant','data'));
    }

    public function edit(int $id)
    {
        $productVariant = ProductVariantAttribute::findOrFail($id);
        $data = [
            'title'=>'Edit Product Variant',
            'back'=> route('product-variant.index'),
        ];
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                            ->with('subcategories')
                            ->get();            
        }
        return view('product::product-variant.edit',compact('productVariant','data','categories'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'attribute' => 'required'
        ]);
        $productVariantAttr = ProductVariantAttribute::findOrFail($id);
        $productVariantAttr->update($request->only('attribute','value'));

        return redirect()->route('product-variant.index');
    }

    public function destroy(int $id)
    {
        $productVariant = ProductVariantAttribute::findOrFail($id);
        if ($productVariant->delete()) {
            return response()->json(['data'=>1]);
        }else{
            return response()->json(['data'=>0]);
        }
    }

    public function getAllDatatables()
    {
        $variant = ProductVariantAttribute::select(['id','attribute','value'])->get();
        return Datatables::of($variant)
        ->addColumn('action', function ($data) {
            $button = '<a href="'.route('product-variant.edit',$data->id).'" class="btn btn-table circle-table edit-table"';
            $button .='data-toggle="tooltip" data-placement="top" title="Edit"></a>';
            $button .='<a href="#" onclick="deleteItem('.$data->id.')" class="btn btn-table circle-table delete-table" data-toggle="tooltip"';
            $button .=' data-placement="top" title="Delete"></a>';
            return $button;
        })
        ->make(true);
    }

    public function ajaxAddVariant(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'attribute' => 'required|unique:product_variant_attributes',
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        
        $variant = ProductVariantAttribute::create($request->except('_token'));
        
        return response()->json($variant);
    }

    public function ajaxGetAllVariant()
    {
        $variant = ProductVariantAttribute::all();
        
        return response()->json($variant);
    }

    public function ajaxVariantValues(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'attribute' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        
        $variant    = ProductVariantAttribute::where('attribute',$request->attribute)->get()->first();
        $attributes = [];
        if (!is_null($variant)) {
            $attributes = explode(',',$variant->value);
        }
        return response()->json($attributes);
    }

    public function ajaxAddByIDVariant(Request $request,int $id)
    {
        $validator = Validator::make($request->all(), [
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        $variant    = ProductVariantAttribute::find($id);
        $new_value  = $variant->value.','.$request->value;
        $variant->value = $new_value;
        $variant->update();
        return response()->json($variant);
    }
}
