<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Product\Http\Resources\ProductResource;
use Modules\Product\Product;
use Modules\Product\ProductImage;
use Modules\Product\ProductVariant;
use Validator;

class ProductApiController extends Controller
{
    private $n_pages;

    public function __construct(){
        $this->n_pages = 6;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::with('variants')
        ->with('preOrder')
        ->where('visible',1)
        ->where('status',1)
        ->orderBy('created_at', 'desc')
        ->paginate($this->n_pages);

        return new ProductResource($product);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'price' => 'required',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'variant' => 'array',
        ]);

        if ($validator->fails()) {
            return new ProductResource($validator->messages());
        }
        $Product = Product::create($request->all());

        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $image) {
                $image = $image->store('public/images');

                if ($key == 0) {
                    $Product->image = $image;
                    $Product->update();
                }

                $newImage = new ProductImage;
                $newImage->product_id = $Product->id;
                $newImage->image = $image;
                $newImage->save();
            }
        }
        if (isset($request->variant)) {
            foreach ($request->variant as $key => $value) {
                ProductVariant::create([
                    'product_id' => $Product->id,
                    'size_code' => $value['size_code'],
                    'sku' => $value['sku'],
                    'initial_balance' => $value['initial_balance'],
                    'safety_stock' => $value['safety_stock'],
                    'quantity_on_hand' => $value['quantity_on_hand'],
                ]);
            }
        }
        
        if (!is_null($Product->images->first())) {
            $image = $Product->images->first();
            $image_url = str_replace('public','storage',$image->image);
            $image_url = url($image_url);
            $Product->image = $image_url;
            $Product->update();
        }
        return new ProductResource($Product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return ['product' => DB::table('products')
                ->selectRaw("products.id,
                    products.name,
                    products.description,
                    products.image,
                    products.price,
                    products.weight,
                    active_discount.discount_id,
                    COALESCE(active_discount.discount_amount,0) AS discount,
                    variants.stock_all_variants")
                ->leftJoin(DB::raw("(
                    SELECT discount_products.discount_id, discount_products.product_id, CAST(IF(discounts.`type`='percentage',ROUND((discounts.nominal/100)*products.price,0),discounts.nominal) AS UNSIGNED) AS discount_amount
                    FROM discount_products
                    JOIN discounts ON discount_products.discount_id=discounts.id
                    JOIN products ON discount_products.product_id=products.id
                    WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date
                ) active_discount"),
                    'products.id', '=', 'active_discount.product_id')
                ->leftJoin(DB::raw("(
                    SELECT product_variants.product_id,CAST(SUM(product_variants.quantity_on_hand) AS UNSIGNED) AS stock_all_variants
                    FROM product_variants
                    GROUP BY product_variants.product_id
                ) variants"),
                    'products.id', '=', 'variants.product_id')

                ->where('id', $id)
                ->first(),
            'variants' => DB::table('product_variants')->where('product_id', $id)->get(),
            'images' => DB::table('product_images')->select('image')->where('product_id', $id)->get()];

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'numeric',
        ]);
        if ($validator->fails()) {
            return new ProductResource($validator->messages());
        }
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->update($request->all());
        }
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json('success', 204);
    }

    public function getAllWithDiscont(Request $request)
    {
        $cat_ids = $request->query('cat');

        $products = DB::table('products')
            ->selectRaw("products.id,
                    products.name,
                    products.image,
                    products.price,
                    COALESCE(active_discount.discount_amount,0) AS discount,
                    variants.stock_all_variants")
            ->leftJoin(DB::raw("(
                    SELECT discount_products.product_id, CAST(IF(discounts.`type`='percentage',ROUND((discounts.nominal/100)*products.price,0),discounts.nominal) AS UNSIGNED) AS discount_amount
                    FROM discount_products
                    JOIN discounts ON discount_products.discount_id=discounts.id
                    JOIN products ON discount_products.product_id=products.id
                    WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date
                ) active_discount"),
                'products.id', '=', 'active_discount.product_id')
            ->join(DB::raw("(
                    SELECT product_variants.product_id,SUM(product_variants.quantity_on_hand) AS stock_all_variants
                    FROM product_variants
                    GROUP BY product_variants.product_id
                ) variants"),
                'products.id', '=', 'variants.product_id');

        if (is_array($cat_ids)) {
            $products = $products->whereIn('products.category_id', $cat_ids);
        } else {
            if ($cat_ids == 'sale') {
                $products = $products->whereRaw('
                    products.id IN (SELECT discount_products.product_id
                    FROM discount_products
                    JOIN discounts ON discount_products.discount_id=discounts.id
                    WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date)');
            }
        }
        return $products->where('status', 1)->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate($this->n_pages);
    }

    public function uploadImage(Request $request)
    {
        $product_id     = Product::getNextID();
        $productImage   = [];
        if ($request->hasFile('file')) {            
            $image = $request->file->store('public/images');
            $productImage = ProductImage::create([
                'product_id' => $product_id,
                'image' => $image,
            ]);   
        }
        return response()->json(['data'=>$productImage]);
    }

    public function showProductVariant(int $id)
    {
        $productVariant = ProductVariant::find($id);
        $productVariant->product;
        return response()->json($productVariant);
    }
}
