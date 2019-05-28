<?php

namespace Modules\Inventory\Http\Controllers;

use Modules\Inventory\Adjustment;
use Modules\Inventory\Http\Requests\StoreAdjustment;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AdjustmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAdjusment = Adjustment::with('productVariant.product')->with('users')->orderBy("adjustments.created_at", "DESC")->get();
        $contentTitleExtra = [
            'component' => 'content-title-button',
            'data' => ['buttonLabel' => 'Add new', 'routeName' => 'adjustment.create']
        ];
        $data = [
            'title' => 'Adjustment'
        ];
        return view('inventory::adjustment.index',compact('getAdjusment', 'contentTitleExtra','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = array('+' => "Stock Additions", '-'=> "Stock Reduction");

        $productVariants = ProductVariant::with(['product.category.parentCategories'])->orderBy("created_at", "DESC")->get();
        $data = [
            'title' => 'New Adjustment',
            'back' => route('adjustment.index')
        ];
        return view('inventory::adjustment.create', compact('method', 'productVariants','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdjustment $request)
    {
        $variant_id = $request->input('product_variants_id');
        $method = $request->input('method');
        $qty = $request->input('qty');

        $variant = ProductVariant::with("product")->find($variant_id);
        if (empty($variant)) {
            return redirect()->route('adjustment.index');
        }

        if ($method == '-' AND $variant->quantity_on_hand < $qty) {
            $request->session()->flash('errorMessage', "Invalid number. Product {$variant->product->name} size {$variant->variant} only has {$variant->quantity_on_hand}!");

            return redirect()->route('adjustment.index');
        }

        $input = $request->all();
        
        $input['type'] = config('inventory.adjustment.type.InventoryAdjustment', 'inventory');
        

        $create = Adjustment::create($input);

        if (!empty($variant) AND !empty($method) AND !empty($qty)) {
            $variant->quantity_on_hand += (($method == '+')?1:-1) * $qty;
            $variant->save();
            if ($method == '+') {
                Product::find($variant->product_id)->update(['status' => true]);
            }
        }

        if ($create) {
            $request->session()->flash('successMessage', 'Variant succesfully adjusted');
        } else {
            $request->session()->flash('errorMessage', 'Fail to adjust variant');
        }

        return redirect()->route('adjustment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\Product\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Adjustment $adjustment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\Product\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Adjustment $adjustment)
    {
        $productVariants = ProductVariant::with(['product.category.parentCategories'])->get();

        $productVariant = ProductVariant::with(['product.category.parentCategories'])->find($adjustment->product_variants_id);

        $method = array('+' => "Stock Additions", '-' => "Stock Reduction");
        
        $data = [
            'title' => 'Edit Adjustment',
            'back' => route('adjustment.index'),
        ];
        return view('inventory::adjustment.edit', compact('adjustment', 'productVariants', 'productVariant', 'method','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\Product\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adjustment $adjustment)
    {
        $adjustment->update($request->all());

        return redirect()->route('adjustment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\Product\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Discount $discount)
    {
        DiscountList::destroy('product_id', $discount->id);

        Discount::destroy($discount->id);

        $request->session()->flash('successMessage', 'Deleted successfully!');

        return redirect()->route('discount.index');
    }
}
