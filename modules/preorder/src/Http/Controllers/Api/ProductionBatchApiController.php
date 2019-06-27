<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Preorder\Http\Resources\ProductionBatchResource;
use Modules\Preorder\Http\Resources\TransactionResource;
use Modules\Preorder\Production;
use Modules\Preorder\ProductionBatch;
use Modules\Preorder\Transaction;
use Validator;

class ProductionBatchApiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api')->except(['index', 'show']);
    }
    /**
     * [index description]
     *
     * @return  JsonResource
     */
    public function index(): JsonResource
    {
        return ProductionBatchResource::collection(ProductionBatch::with('getProductions')->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pre_order_id' => 'required|numeric|exists:pre_orders,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return new ProductionBatchResource($validator->messages());
        }

        $transactions = Transaction::where('pre_order_id', $request->pre_order_id)
            ->where('status', 'paid')
            ->orderBy('created_at', 'ASC')
            ->get();

        if ($transactions->count() > 0) {
            $productionBatch = new ProductionBatch;
            $productionBatch->pre_order_id = $request->pre_order_id;
            $productionBatch->batch_name = $request->batch_name;
            $productionBatch->batch_qty = count($transactions);
            $productionBatch->start_production_date = $request->start_date;
            $productionBatch->end_production_date = $request->end_date;
            $productionBatch->save();

            foreach ($transactions as $value) {
                $new_production = new Production;
                $new_production->transaction_id = $value->id;
                $new_production->production_batch_id = $productionBatch->id;
                $new_production->save();
            }
            $productionBatch->getProductions;
            return new ProductionBatchResource($productionBatch);
        } else {
            return TransactionResource::collection($transactions);
        }
    }
    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return  mixed
     */
    public function storeCustomQty(Request $request)
    {
        $transactions = Transaction::where('pre_order_id', $request->pre_order_id)
            ->where('status', 'paid')
            ->orderBy('created_at', 'ASC')
            ->limit($request->batch_qty)
            ->get();

        if ($transactions->count() > 0) {
            $productionBatch = ProductionBatch::create($request->all());
            foreach ($transactions as $value) {
                $new_production = new Production;
                $new_production->transaction_id = $value->id;
                $new_production->production_batch_id = $productionBatch->id;
                $new_production->save();
            }
            $productionBatch->getProductions;
            return new ProductionBatchResource($productionBatch);
        } elseif ($transactions->count() == 0) {
            return TransactionResource::collection($transactions);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\Preorder\ProductionBatch  $productionBatch
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(ProductionBatch $productionBatch)
    {
        return new ProductionBatchResource($productionBatch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\Preorder\ProductionBatch  $productionBatch
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function update(Request $request, ProductionBatch $productionBatch)
    {
        $validator = Validator::make($request->all(), [
            'pre_order_id' => 'numeric|exists:pre_orders,id',
            'start_production_date' => 'date',
            'end_production_date' => 'date',
        ]);

        if ($validator->fails()) {
            return new ProductionBatchResource($validator->messages());
        }
        $productionBatch->update($request->all());
        return new ProductionBatchResource($productionBatch);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Modules\Preorder\ProductionBatch  $productionBatch
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ProductionBatch $productionBatch)
    {
        $productionBatch->delete();
        return response()->json('success', 204);
    }
    /**
     * Get all batch production by pre-order ID
     *
     * @param int $preorder_id
     * @return mixed
     */
    public function getByPreOrderID(int $preorder_id)
    {
        $productionBatch = ProductionBatch::with('getProductions')
            ->where('pre_order_id', $preorder_id)
            ->get();

        return Datatables::of($productionBatch)
            ->addColumn('batch_name', function ($data) {
                return '<a href="'.route('shipping.transaction',$data->id).'">'.ucwords($data->batch_name).'</a>';   
            })
            ->addColumn('variant_qty', function ($data) {

                $variant_qty = '';
                $variant_qty_items = [];

                foreach ($data->getProductions as $key => $value) {

                    $items = $value->getTransaction->orders;
                    foreach ($items as $index => $item) {
                        $variant_qty_items[$item->productVariant->variant][] = $item->qty;
                    }

                }
                foreach ($variant_qty_items as $label => $pieces) {
                    $variant_qty .= ucwords($label) . ' : ';
                    $variant_qty .= array_sum($pieces);
                    $variant_qty .= '<br/>';
                }
                return $variant_qty;
            })
            ->addColumn('ready_to_ship', function ($data) {
                $amount = 0;
                foreach ($data->getProductions as $key => $value) {
                    if (in_array($value->status,['ready_to_ship','shipped'])) {
                        $amount++;
                    }
                }
                return $amount;
            })
            ->addColumn('shipping_sticker', function ($data) {
                return '<a href="'.route('print.shipping-sticker',$data->id).'" class="btn btn-table circle-table print-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print"></a>';   
            })
            ->rawColumns(['batch_name','variant_qty','shipping_sticker'])
            ->toJson();
    }
}
