<?php

namespace Modules\ProductManagement\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\ProductManagement\Http\Resources\ProductResource;
use Modules\ProductManagement\Product;
use Validator;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        
        if(is_array($cat_ids)) {
            $products = $products->whereIn('products.category_id', $cat_ids);
        }
        else {
            if($cat_ids=='sale') {
                $products = $products->whereRaw('
                    products.id IN (SELECT discount_products.product_id
                    FROM discount_products
                    JOIN discounts ON discount_products.discount_id=discounts.id
                    WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date)');
            }
        }
        
        return $products->where('status',1)->orderBy('created_at','desc')->orderBy('id','desc')->paginate(8);
        /*
            SELECT 
            products.id, 
            products.name, 
            products.image, 
            products.price,
            COALESCE(active_discount.discount_amount,0) AS current_discount
            FROM products
                LEFT JOIN (SELECT discount_products.product_id, IF(discounts.`type`='percentage',(discounts.nominal/100)*products.price,discounts.nominal) AS discount_amount
                FROM discount_products
                JOIN discounts ON discount_products.discount_id=discounts.id
                JOIN products ON discount_products.product_id=products.id
                WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date) active_discount
            ON products.id=active_discount.product_id
            WHERE products.category_id IN (1,2,3)
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'price' => 'required'
        ]);
        if ($validator->fails()) {
            return new ProductResource($validator->messages());
        }
        $Product = Product::create($request->all());
        return new ProductResource($Product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\ProductManagement\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
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
                    variants.stock_all_variants,
                    order_items_product.avg_product_rating")
                ->leftJoin(DB::raw("(
                    SELECT product_variants.product_id,AVG(order_items.rating) AS avg_product_rating
                    FROM order_items
                    JOIN product_variants ON order_items.productvariant_id=product_variants.id
                    GROUP BY product_variants.product_id
                ) order_items_product"),
                'products.id', '=', 'order_items_product.product_id')
                ->leftJoin(DB::raw("(
                    SELECT discount_products.discount_id, discount_products.product_id, CAST(IF(discounts.`type`='percentage',ROUND((discounts.nominal/100)*products.price,0),discounts.nominal) AS UNSIGNED) AS discount_amount
                    FROM discount_products
                    JOIN discounts ON discount_products.discount_id=discounts.id
                    JOIN products ON discount_products.product_id=products.id
                    WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date
                ) active_discount"),
                'products.id', '=', 'active_discount.product_id')
                ->join(DB::raw("(
                    SELECT product_variants.product_id,CAST(SUM(product_variants.quantity_on_hand) AS UNSIGNED) AS stock_all_variants
                    FROM product_variants
                    GROUP BY product_variants.product_id
                ) variants"),
                'products.id', '=', 'variants.product_id')
                
                ->where('id',$id)
                ->first(),
            'variants'=>DB::table('product_variants')->where('product_id',$id)->get(),
            'images'=>DB::table('product_images')->select('image')->where('product_id',$id)->get()];
        
        
        /*
        SELECT products.id, products.name, products.image, products.price, COALESCE(active_discount.discount_amount,0) AS current_discount, [] AS images 
        FROM products
        LEFT JOIN (SELECT discount_products.product_id, CAST(IF(discounts.`type`='percentage',ROUND((discounts.nominal/100)*products.price,0),discounts.nominal) AS UNSIGNED) AS discount_amount
        FROM discount_products
        JOIN discounts ON discount_products.discount_id=discounts.id
        JOIN products ON discount_products.product_id=products.id
        WHERE NOW() BETWEEN discounts.start_date AND discounts.end_date) active_discount
        ON products.id=active_discount.product_id
        
        LEFT JOIN (select order_items.productvariant_id,product_variants.product_id,avg(order_items.rating)
        from order_items
        join product_variants
        on order_items.productvariant_id=product_variants.id) 
        WHERE id=1
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\ProductManagement\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\ProductManagement\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'numeric',
        ]);
        if ($validator->fails()) {
            return new ProductResource($validator->messages());
        }
        $product->update($request->all());
        return new ProductResource($Product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\ProductManagement\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
