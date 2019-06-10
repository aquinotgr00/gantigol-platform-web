<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\PreOrder;
use Modules\Product\Product;
use Modules\Product\ProductVariantAttribute;
use Modules\Preorder\Jobs\BulkPaymentReminder;

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
        return view('preorder::preorder.index',compact('data'));
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
        return view('preorder::preorder.show', ['preOrder' => $preOrder]);
    }

    /**
     * Store a pre order
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        PreOrder::create($request->except(['_token']));

        Product::findOrFail($request->product_id)->update(['status' => 2]);

        return back();
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
        $send = [
            'preOrder' => $preOrder,
            'product' => $preOrder->product,
            'productVariant' => $preOrder->product->variants,
            'related_tags' => $related_tags,
            'data' => $data
        ];
        return view('preorder::preorder.edit', $send);
    }
}
