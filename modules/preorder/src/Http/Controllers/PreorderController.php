<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use Modules\Preorder\PreOrder;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Modules\Product\ProductVariantAttribute;
use Modules\Product\ProductImage;
use DataTables;

class PreorderController extends Controller
{
    /**
     * show pre order list
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $preorders = PreOrder::with('product')
                ->where('status', 'publish')
                ->get();
            return DataTables::of($preorders)
                ->addColumn('product.name', function ($row) {
                    if (Gate::allows('view-transaction',$row)) {
                        $link = '<a href="'.route('pending.transaction',$row->id).'">';
                    }else{
                        $link = '<a href="'.route('list-preorder.show',$row->id).'">';
                    }
                    $link .= $row->product->name;
                    $link .='</a>';
                    return $link;
                })
                ->addColumn('image', function ($row) {
                    $image = '<img src="' . $row->product->image . '" style="width:50px;" />';
                    return $image;
                })
                ->addColumn('end_date', function ($row) {
                    return date_format($row->created_at, "d-m-Y");
                })
                ->addColumn('action', function ($row) {
                    $data = [
                        'button' => 'hide-table',
                        'route' => Route('product.set-visible', $row->product->id),
                        'title' => 'Show On Website'
                    ];
                    if ($row->product->visible) {
                        $data = [
                            'button' => 'show-table',
                            'route' => Route('product.set-visible', $row->product->id),
                            'title' => 'Hide On Website'
                        ];
                    }
                    return  '<a href="' . Route('list-preorder.edit', $row->id) . '" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                    <a href="' . $data["route"] . '" class="btn btn-table circle-table ' . $data["button"] . '" data-toggle="tooltip" data-placement="top" title="' . $data['title'] . '"></a>';
                })
                ->rawColumns(['image','product.name', 'action'])
                ->make(true);
        }
        
        return view('preorder::preorder.index');
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
        return view('preorder::preorder.create', compact('variantAttribute', 'categories', 'data'));
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
            'variants' => (isset($preOrder->product->variants)) ? $preOrder->product->variants : null,
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
            'category_id' => 'required',
            'weight' => 'required|numeric',
        ]);

        $product = Product::create(
            $request->only(
                'name',
                'description',
                'price',
                'category_id',
                'status',
                'image',
                'weight'
            )
        );

        if ($request->has('sku')) {

            $trim_sku_simple = trim($request->sku);

            if (!empty($trim_sku_simple)) {
                ProductVariant::create([
                    'sku' => $trim_sku_simple,
                    'product_id' => $product->id,
                    'price' => $request->price,
                    'variant' => 'ALL SIZE'
                ]);
            }
        }

        if ($request->has('tags')) {
            $tags = explode(',', $request->tags);
            $product->retag($tags);
        }

        if ($request->has('list_variant')) {

            foreach ($request->list_variant as $key => $value) {
                $trim_sku = trim($request->list_sku[$key]);
                if (!empty($trim_sku)) {

                    ProductVariant::create([
                        'variant' => $value,
                        'sku' => $trim_sku,
                        'product_id' => $product->id,
                        'price' => $request->list_price[$key]
                    ]);
                }
            }
        }

        $preOrder = PreOrder::create([
            'product_id' => $product->id,
            'quota' => $request->quota,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => ($request->status == 0) ? 'draft' : 'publish'
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $key => $value) {
                ProductImage::create([
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
        $related_tags   = implode(',', $get_tags);

        $data = [
            'title' => $preOrder->name,
            'back' => route('list-preorder.index')
        ];

        $categories = [];

        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $productCategory    = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')->with('subcategories')->get();
            $categories         = $productCategory;
        }
        $price_preorder = $preOrder->product->price;
        if ($preOrder->product->variants->count() == 1) {
            $price_preorder = $preOrder->product->variants[0]->price;
        }

        $send = [
            'preOrder' => $preOrder,
            'product' => $preOrder->product,
            'productVariant' => (isset($preOrder->product->variants)) ? $preOrder->product->variants : null,
            'related_tags' => $related_tags,
            'categories' => $categories,
            'data' => $data,
            'price_preorder' => $price_preorder
        ];

        return view('preorder::preorder.edit', $send);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'description' => 'required',
            'start_date' => 'date',
            'end_date' => 'date',
            'quota' => 'numeric',
            'name' => 'required',
            'price' => 'required|numeric'
        ]);
        $preOrder   = PreOrder::findOrFail($id);
        $preOrder->update($request->only('quota', 'start_date', 'end_date'));

        $product    = Product::find($preOrder->product_id);

        if (!is_null($product)) {

            $data['description']    = $request->description;
            $data['status']         = $request->status;
            $data['name']           = $request->name;
            $data['price']          = $request->price;

            if ($request->has('image')) {
                $trim_img = trim($request->image);
                if (!empty($trim_img)) {
                    $data['image'] = $request->image;
                }
            }

            if ($request->has('category_id')) {
                $category_id = trim($request->category_id);
                if (!empty($category_id)) {
                    $data['category_id'] = $request->category_id;
                }
            }

            $product->update($data);

            if (isset($product->variants)) {
                if ($product->variants->count() == 1) {
                    $productVariantID   = $product->variants->first()->id;
                    $productVariant     = ProductVariant::find($productVariantID);
                    $productVariant->update([
                        'price' => $product->price
                    ]);
                }
            }
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
