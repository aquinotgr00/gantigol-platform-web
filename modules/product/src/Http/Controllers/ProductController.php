<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Product\Product;
use Modules\Product\ProductVariant;
use Modules\Product\ProductVariantAttribute;
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
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                            ->with('subcategories')
                            ->get();            
        }
        
        return view("product::product.create",compact('categories','data'));
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
            'price' => 'required|numeric'
        ]);
        
        $product = Product::create(
        $request->only(
            'name',
            'description',
            'price',
            'activity_id',
            'category_id',
            'status'
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
                        'size_code'=> $request->list_size[$key],
                        'sku'=> $trim_sku,
                        'product_id'=> $product->id,
                        'price' => $request->list_price[$key],
                        'initial_balance' => $request->list_initial[$key],
                        'quantity_on_hand' => $request->list_initial[$key]
                    ]);

                }
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
        $data = [
            'title' => ucwords($product->name),
            'back' => route('product.index')
        ];
        return view("product::product.show",compact('product','productVariant','data'));
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
        $related_tags   = implode(',',$get_tags);
        $product        = $productVariant->product;
        $data = [
            'title' => $product->name,
            'back' => route('product.index')
        ];
        return view("product::product.edit",compact('product','productVariant','data','related_tags'));
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
            'description' => 'required'
        ]);
        $productVariant = ProductVariant::findOrFail($id);
        
        $product = Product::findOrFail($productVariant->product_id);
        
        $product->update(
        $request->only(
            'description',
            'status'
        ));

        //activity log
        $user = Auth::user();
        activity()
            ->performedOn($productVariant)
            ->causedBy($user)
            ->withProperties([
                'activity' => 'Change Description'
            ])
            ->log('Change Description');
        
        $productVariant->update(
        $request->only(
            'size_code'
        ));
        
        if ($request->has('tags')) {
            $tags = explode(',',$request->tags);
            $product->retag($tags); 
        }

        return redirect()->route('product.show',$productVariant->id);
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
            return response()->json(['messsage'=>404]);
        }

        if ($method == '-' AND $variant->quantity_on_hand < $qty) {
            $data = [
                'message' => "Invalid number. Product {$variant->product->name} size {$variant->variant} only has {$variant->quantity_on_hand}!"
            ];
            return response()->json($data);
        }

        $input = $request->all();
        
        $input['type'] = config('inventory.adjustment.type.InventoryAdjustment', 'inventory');
        $input['users_id'] = Auth::user()->id;

        $create = Adjustment::create($input);

        if (!empty($variant) AND !empty($method) AND !empty($qty)) {
            $variant->quantity_on_hand += (($method == '+')?1:-1) * $qty;
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
                'activity' => ($method == '+')? 'Add Stock' : 'Reduce Stock'
            ])
            ->log($request->note);

        return response()->json($create);
    }

    public function ajaxAllProduct()
    {
        $product = DB::table('product_variants')
        ->join('products', 'products.id', '=', 'product_variants.product_id')
        ->select(
                'product_variants.*',
                'products.name',
                'products.image'
        )->get();

        return Datatables::of($product)
        ->addColumn('image', function ($data) {
            $image_url = str_replace('public', 'storage', $data->image);
            $image_url = url($image_url);
            return '<img src="' . $image_url . '" alt="#">';
        })
        ->addColumn('name', function ($data) {
            $link  = '<a href="'.route('product.show',$data->id).'" >';
            $link .= $data->name.' #'.$data->size_code;
            $link .= '</a>';
            return $link;
        })
        ->addColumn('action', function ($data) {
            $button = '<a href="'.route('product.edit',$data->id).'"
                        class="btn btn-table circle-table edit-table"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Edit"></a>';
            $button .= '<a href="#" 
                        data-target="#ModalAdjusment" data-toggle="modal" 
                        class="btn btn-table circle-table adjustment-table" 
                        data-id="10" 
                        data-placement="top" 
                        title="Adjustment"></a>';
            $button .= '<a href="'.route('product.set-visible',$data->product_id).'" 
                        class="btn btn-table circle-table show-table"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Hide On Website">
                        </a>';
            return $button;
        })
        ->rawColumns(['image','name','action'])
        ->toJson();
    }

    public function ajaxDetailProductActivites(Request $request,int $id)
    {
        $validator = Validator::make($request->all(), [
            'activity' => 'required'
        ]);

        if ($validator->fails()) {
            $activity = Activity::where('subject_id',$id)
            ->orderBy('created_at','DESC')
            ->get();
        }else{
            $activity = Activity::where('properties->activity',$request->activity)
            ->where('subject_id',$id)
            ->orderBy('created_at','DESC')
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

    public function setVisibleProduct(Request $request,int $id)
    {
        $product = Product::findOrFail($id);
        $product->visible = (!$product->visible);
        if ($product->update()) {
            $request->session()->flash('alert', 'Success! to update product visible');
        }else{
            $request->session()->flash('alert', 'Fail to update product visible');
        }
        return redirect()->route('product.index');
    }
}
