<?php
namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Validation\Rule;
use Modules\Preorder\Http\Resources\PreOrderResource;
use Modules\Preorder\PreOrder;
use Modules\Product\Product;
use Modules\Product\ProductImage;
use Validator;

class PreorderApiController extends Controller
{
    /**
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function index(): JsonResource
    {
        $preOrder = PreOrder::orderBy('created_at', 'DESC')
            ->with('product')
            ->with('transaction')
            ->paginate(25);
        return PreOrderResource::collection($preOrder);
    }
    /**
     *
     * @param   PreOrder  $preOrder
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function show(PreOrder $preOrder)
    {
        return new PreOrderResource($preOrder);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,bmp,png|max:2000',
        ]);

        if ($validator->fails()) {
            return new PreOrderResource($validator->messages());
        }

        $new_product = Product::create($request->only('name', 'price', 'description', 'weight'));

        $request->request->add(['product_id' => $new_product->id]);

        $preOrder = PreOrder::create($request->only('product_id', 'quota', 'end_date', 'status', 'start_date'));

        // add product images
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $image = $image->store('public/images');
                $new_product->image = $image;
                $new_product->update();
                
                $newImage = new ProductImage;
                $newImage->product_id   = $new_product->id;
                $newImage->image        = $image;
                $newImage->save();
            }
        }
        
        return new PreOrderResource($preOrder);
    }
    /**
     *
     * @param   Request   $request
     * @param   int  $id
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function update(Request $request, int $id)
    {

        $preOrder = PreOrder::find($id);
        if ($preOrder->product->count() > 0) {
            $product = Product::find($preOrder->product->id);
            $validator = Validator::make($request->all(), [
                'name' => [
                    'required',
                    Rule::unique('products')->ignore($product->id),
                ],
            ]);

            if ($validator->fails()) {
                return new PreOrderResource($validator->messages());
            }
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'weight' => $request->weight,
                'status' => $request->status,
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:products',
                'price' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return new PreOrderResource($validator->messages());
            }
            $product = Product::create($request->only('name', 'price', 'description', 'weight', 'status'));
        }

        if (isset($preOrder->id)) {
            $preOrder->update([
                'product_id' => $product->id,
                'quota' => $request->quota,
                'end_date' => (is_null($request->end_date)) ? $preOrder->end_date : $request->end_date,
            ]);
        }

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $image = $image->store('public/images');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $image,
                ]);
            }
        }

        return new PreOrderResource($preOrder);
    }
    /**
     * [trashed description]
     *
     * @param   PreOrder  $preOrder
     *
     * @return mixed
     */
    public function trashed(PreOrder $preOrder)
    {
        $preOrder->trashed();
        return response()->json('success', 204);
    }
    /**
     * [restore description]
     *
     * @param   PreOrder  $preOrder
     *
     * @return mixed
     */
    public function restore(PreOrder $preOrder)
    {
        $preOrder->restore();
        return response()->json('success', 200);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function getByStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => [
                'required',
                Rule::in(['publish', 'draft', 'closed']),
            ],
        ]);
        if ($validator->fails()) {
            return new PreOrderResource($validator->messages());
        }
        $preOrder = PreOrder::with('product')->get();
        $byStatus = $preOrder->where('status', $request->status);
        
        foreach ($byStatus as $key => $value) {
            if (isset($value->product)) {
                $value->product;
            }
            if (isset($value->product->firstImage)) {
                $value->product->firstImage;
            }
        }
        return new PreOrderResource($byStatus);
    }
    /**
     *
     * @param   Request  $request
     * @param   int      $id
     *
     * @return \Modules\Preorder\Http\Resources\PreOrderResource
     */
    public function closePreOrder(Request $request, int $id)
    {
        $preOrder = PreOrder::with('product')->find($id);
        $product = $preOrder->product;
        if ($product instanceof Product) {
            if ($product->status == 'publish') {
                $product->update([
                    'status' => 'closed',
                ]);
            } else {
                $response['errors'] = [
                    'message' => $product->name . ' must be published first',
                    'status' => 401,
                ];
                return new PreOrderResource($response);
            }
        }
        return new PreOrderResource($preOrder);
    }

    /**
     * Get all the pre order product
     *
     *
     * @return  JsonResource
     */
    public function apiProductPreOrder(): JsonResource
    {
        $Product = DB::table('products')
            ->join('pre_orders', 'products.id', '=', 'pre_orders.product_id')
            ->where('products.status', 'publish')
            ->select('products.*', 'pre_orders.end_date', 'pre_orders.quota', 'pre_orders.id AS pre_order_id')
            ->paginate(25);
        return new ProductResource($Product);
    }
}
