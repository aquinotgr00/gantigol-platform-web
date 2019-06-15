<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\PreOrder;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Modules\Product\ProductVariantAttribute;
use Modules\Product\ProductImage;

class PreorderController extends Controller
{
    /**
     * show pre order list
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = 'Preorder';
        return view('preorder::preorder.index', compact('data'));
    }
    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function draft()
    {
        return view('preorder::preorder.draft');
    }
    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function closed()
    {
        return view('preorder::preorder.closed');
    }
    /**
     * create preorder
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $data = [
            'title' => 'Create Preorder',
            'back' => route('list-preorder.index')
        ];

        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $productCategory    = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')->with('subcategories')->get();
            $categories         = $productCategory;
        }
        $variantAttribute = ProductVariantAttribute::all();
        return view('preorder::preorder.create',compact('variantAttribute','categories','data'));

    }
    /**
     * show single pre order
     *
     * @param integer $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $preOrder = PreOrder::findOrFail($id);
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $productCategory    = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')->with('subcategories')->get();
            $categories         = $productCategory;
        }
        $send = [
            'categories' => $categories,
            'preOrder' => $preOrder,
            'product' => $preOrder->product,
            'variants' => $preOrder->product->variants,
            'data' => [
                'title' => $preOrder->product->name,
                'back' => route('list-preorder.index')
            ],
        ];

        return view('preorder::preorder.show', $send);
    }

    /**
     * Store a pre order
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'image' => 'required',
            'category_id'=>'required'
        ]);
        
        $product = Product::create(
        $request->only(
            'name',
            'description',
            'price',
            'activity_id',
            'category_id',
            'status',
            'image'
        ));

        if ($request->has('sku')) {
            
            if (
                !is_null($request->sku) &&
                !is_null($request->initial_balance)
            ) {
                $new_variant = ProductVariant::create([
                    'sku'=> $request->sku,
                    'size_code'=> $request->size_code,
                    'product_id'=> $product->id,
                    'price' => $request->price,
                    'initial_balance' => $request->initial_balance,
                    'quantity_on_hand' => $request->initial_balance,
                    'variant' => 'ALL SIZE'
                ]);
            }
        }
        
        if ($request->has('tags')) {
            $tags = explode(',',$request->tags);
            $product->retag($tags); 
        }
        
        if ($request->has('list_variant')) {

            foreach ($request->list_variant as $key => $value) {
                $trim_sku = trim($request->list_sku[$key]);
                if (!empty($trim_sku)) {

                    ProductVariant::create([
                        'variant'=> $value,
                        'sku'=> $trim_sku,
                        'product_id'=> $product->id,
                        'price' => $request->list_price[$key],
                        'initial_balance' => $request->list_initial[$key],
                        'quantity_on_hand' => $request->list_initial[$key]
                    ]);

                }
            }
        }

        $preOrder = PreOrder::create([
            'product_id' => $product->id,
            'quota' => $request->quota,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => ($request->status == 0)? 'draft' : 'publish'
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $key => $value) {
                $newProductImage = ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $value
                ]);
            }
        }
        
        return redirect()->route('list-preorder.index');
    }
    /**
     * [edit description]
     *
     * @param   int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(int $id)
    {
        $preOrder       = PreOrder::findOrFail($id);
        $product_tags   = Product::with('tagged')->find($preOrder->product_id);
        $get_tags       = [];
        foreach ($product_tags->tags as $key => $value) {
            $get_tags[] = $value->name;
        }
        $related_tags   = implode(',',$get_tags);
        
        $data = [
            'title' => $preOrder->name,
            'back' => route('list-preorder.index') 
        ];
        
        $categories = [];
        
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $productCategory    = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')->with('subcategories')->get();
            $categories         = $productCategory;
        }

        $send = [
            'preOrder' => $preOrder,
            'product' => $preOrder->product,
            'productVariant' => $preOrder->product->variants,
            'related_tags' => $related_tags,
            'categories' => $categories,
            'data' => $data
        ];
        return view('preorder::preorder.edit', $send);
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'description'=> 'required',
            'start_date'=> 'date',
            'end_date'=> 'date',
            'quota'=> 'numeric',
            'image' => 'required'
        ]);
        $preOrder   = PreOrder::findOrFail($id);
        $preOrder->update($request->only('quota','start_date','end_date'));
        
        $product    = Product::find($preOrder->product_id);
        if (!is_null($product)) {
            $product->update($request->only('description','status','image'));
        }
        if ($request->has('images')) {
            if (isset($product->images)) {
                foreach ($product->images as $key => $value) {
                    $productImage = ProductImage::find($value->id);
                    $productImage->delete();
                }
            }
            foreach ($request->images as $key => $value) {
                $newProductImage = ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $value
                ]);
            }
        }
        return redirect()->route('list-preorder.index');
    }
}
