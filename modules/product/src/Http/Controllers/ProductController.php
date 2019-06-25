<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Modules\Product\ProductImage;
use Modules\Inventory\Adjustment;
use Spatie\Activitylog\Models\Activity;
use Validator;
use DataTables;
use Auth;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("product::product.index");
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
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                ->with('subcategories')
                ->get();
        }

        return view("product::product.create", compact('categories', 'data'));
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
            'weight' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'required',
        ]);

        $product = Product::create(
            $request->only(
                'name',
                'description',
                'price',
                'category_id',
                'status',
                'keywords',
                'image',
                'weight'
            )
        );

        if ($request->has('sku')) {

            if (
                !is_null($request->sku) &&
                !is_null($request->initial_balance)
            ) {
                $new_variant = ProductVariant::create([
                    'sku' => $request->sku,
                    'product_id' => $product->id,
                    'price' => $request->price,
                    'initial_balance' => $request->initial_balance,
                    'quantity_on_hand' => $request->initial_balance,
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
                        'price' => $request->list_price[$key],
                        'initial_balance' => $request->list_initial[$key],
                        'quantity_on_hand' => $request->list_initial[$key]
                    ]);
                }
            }
        }

        if ($request->has('images')) {
            
            foreach ($request->images as $key => $value) {
                $productImage = ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $value
                ]);
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $productVariant = ProductVariant::findOrFail($id);
        $product = $productVariant->product;

        $categories = [];

        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                ->with('subcategories')
                ->get();
        }

        $data = [
            'title' => ucwords($product->name . ' #' . $productVariant->variant),
            'back' => route('product.index')
        ];
        return view("product::product.show", compact('product', 'productVariant', 'categories', 'data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $productVariant = ProductVariant::findOrFail($id);
        $product_tags   = Product::with('tagged')->find($productVariant->product_id);
        $get_tags       = [];
        foreach ($product_tags->tags as $key => $value) {
            $get_tags[] = $value->name;
        }
        $related_tags   = implode(',', $get_tags);
        $product        = $productVariant->product;
        $data = [
            'title' => $product->name,
            'back' => route('product.index')
        ];
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                ->with('subcategories')
                ->get();
        }
        return view("product::product.edit", compact('product', 'productVariant', 'data', 'related_tags', 'categories'));
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
            'description' => 'required',
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
        ]);
        $productVariant = ProductVariant::findOrFail($id);

        $product = Product::findOrFail($productVariant->product_id);
        
        $data['description'] = $request->description;
        $data['status']     = $request->status;
        $data['price']      = intval($request->price);
        $data['name']       = $request->name;
        $data['weight']     = $request->weight;
        
        if ($request->has('image')) {
            $trim_img = trim($request->image);
            if (!empty($trim_img)) {
                $data['image'] = $trim_img;
            }
        }

        if ($request->has('category_id')) {
            if ($request->category_id > 0) {
                $data['category_id'] = $request->category_id;
            }
        }
        
        $product->update($data);
        
        $productVariant->update([
            'price' => $data['price']
        ]);

        //activity log
        foreach ($product->variants as $index => $variant) {
            $user = Auth::user();
            activity()
                ->performedOn($variant)
                ->causedBy($user)
                ->withProperties([
                    'activity' => 'Change Description'
                ])
                ->log('Change Description');
        }

        if ($request->has('tags')) {
            $tags = explode(',', $request->tags);
            $product->retag($tags);
        }

        if ($request->has('images')) {
            if (isset($product->images)) {
                foreach ($product->images as $key => $value) {
                    $productImage = ProductImage::find($value->id);
                    $productImage->delete();
                }
            }
            foreach ($request->images as $key => $value) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $value
                ]);
            }
        }

        return redirect()->route('product.show', $productVariant->id);
    }

    public function ajaxStoreAdjustment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'method' => 'required',
            'qty' => 'required',
            'note' => 'required',
            'product_variants_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $variant_id = $request->input('product_variants_id');
        $method     = $request->input('method');
        $qty        = $request->input('qty');

        $variant = ProductVariant::with("product")->find($variant_id);
        if (empty($variant)) {
            return response()->json(['messsage' => 404]);
        }

        if ($method == '-' and $variant->quantity_on_hand < $qty) {
            $data = [
                'message' => "Invalid number. Product {$variant->product->name} size {$variant->variant} only has {$variant->quantity_on_hand}!"
            ];
            return response()->json($data);
        }

        $input = $request->all();

        $input['type'] = config('inventory.adjustment.type.InventoryAdjustment', 'inventory');
        $input['users_id'] = Auth::user()->id;

        $create = Adjustment::create($input);

        if (!empty($variant) and !empty($method) and !empty($qty)) {
            $variant->quantity_on_hand += (($method == '+') ? 1 : -1) * $qty;
            $variant->save();
            if ($method == '+') {
                Product::find($variant->product_id)->update(['status' => true]);
            }
        }

        //activity log
        $user = Auth::user();
        activity()
            ->performedOn($variant)
            ->causedBy($user)
            ->withProperties([
                'activity' => ($method == '+') ? 'Add Stock' : 'Reduce Stock'
            ])
            ->log($request->note);

        return response()->json($create);
    }

    public function ajaxAllProduct()
    {
        $product = DB::table('product_variants')
            ->join('products', 'products.id', '=', 'product_variants.product_id')
            ->join('pre_orders', 'pre_orders.product_id', '!=', 'product_variants.product_id')
            ->select(
                'product_variants.*',
                'products.name',
                'products.visible',
                'products.image'
            )->get();

        return Datatables::of($product)
            ->addColumn('image', function ($data) {
                $image_url = str_replace('public', 'storage', $data->image);
                $image_url = url($image_url);
                return '<img src="' . $image_url . '" alt="#" style="width:50px;">';
            })
            ->addColumn('name', function ($data) {
                $link  = '<a href="' . route('product.show', $data->id) . '" >';
                $link .= $data->name . ' #' . $data->variant;
                $link .= '</a>';
                return $link;
            })
            ->addColumn('action', function ($data) {
                $button = '<a href="' . route('product.edit', $data->id) . '"
                        class="btn btn-table circle-table edit-table"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Edit"></a>';
                $button .= '<span data-toggle="tooltip" data-placement="top" title="Adjustment"><a href="#" 
                        data-target="#ModalAdjusment" data-toggle="modal" 
                        class="btn btn-table circle-table adjustment-table" 
                        data-id="' . $data->id . '">
                        </a></span>';
                $button .= '<a href="' . route('product.set-visible', $data->product_id) . '"';

                if ($data->visible == 1) {
                    $button .= 'class="btn btn-table circle-table show-table" title="Hide On Website"';
                } else {
                    $button .= 'class="btn btn-table circle-table hide-table" title="Show On Website"';
                }

                $button .= 'data-toggle="tooltip"
                        data-placement="top" >
                        </a>';
                return $button;
            })
            ->rawColumns(['image', 'name', 'action'])
            ->toJson();
    }

    public function ajaxDetailProductActivites(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'activity' => 'required'
        ]);

        if ($validator->fails()) {
            $activity = Activity::where('subject_id', $id)
                ->orderBy('created_at', 'DESC')
                ->get();
        } else {
            $activity = Activity::where('properties->activity', $request->activity)
                ->where('subject_id', $id)
                ->orderBy('created_at', 'DESC')
                ->get();
        }

        $activites = [];

        foreach ($activity as $key => $value) {
            $causer = $value->causer_type::find($value->causer_id);
            $activites[] = [
                'date' => $value->created_at->format('d-m-Y h:i:s'),
                'name' => $causer->name,
                'activity' => $value->properties['activity'],
                'notes' => $value->description,
            ];
        }
        return DataTables::of($activites)->toJson();
    }

    public function setVisibleProduct(Request $request, int $id)
    {
        $product = Product::findOrFail($id);
        $product->visible = (!$product->visible);
        if ($product->update()) {
            $request->session()->flash('alert', 'Success! to update product visible');
        } else {
            $request->session()->flash('alert', 'Fail to update product visible');
        }
        return back(); //redirect()->route('product.index');
    }

    public function deleteImage(int $id)
    {
        $image = ProductImage::findOrFail($id);
        $image->delete();
        return back();
    }
}
