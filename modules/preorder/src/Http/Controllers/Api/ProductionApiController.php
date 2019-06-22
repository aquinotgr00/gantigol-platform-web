<?php

namespace Modules\Preorder\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Preorder\Http\Resources\ProductionResource;
use Modules\Preorder\Mail\WayBill;
use Modules\Preorder\Production;
use Modules\Preorder\ProductionBatch;
use Modules\Preorder\Transaction;
use Validator;

class ProductionApiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ProductionResource::collection(Production::paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Modules\Preorder\Http\Resources\ProductionResource
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required',
            'status' => 'in:paid',
        ]);

        if ($validator->fails()) {
            return new ProductionResource($validator->messages());
        }
        $Production = Production::create($request->except(['status']));
        return new ProductionResource($Production);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Modules\Preorder\Http\Resources\ProductionResource
     */
    public function show(int $id)
    {
        $production = Production::find($id);
        $production->getTransaction;
        return new ProductionResource($production);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Production $production
     * @return \Modules\Preorder\Http\Resources\ProductionResource
     */
    public function update(Request $request, Production $production)
    {

        $production->update(
            $request->only(
                [
                    'delivery_date',
                    'production_batch_id',
                ]
            )
        );
        
        return new ProductionResource($production);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Production $production
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Production $production)
    {
        $production->delete();
        return response()->json('success', 204);
    }
    /**
     * get production by production batch ID
     *
     * @param int $production_batch_id
     * @return mixed
     */
    public function getByBatchID(int $production_batch_id)
    {
        $production = Production::where('production_batch_id', $production_batch_id)->paginate(25);
        return ProductionResource::collection($production);
    }
    /**
     *
     * @param   Production  $production
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function trashed(Production $production)
    {
        $production->trashed();
        return response()->json('success', 204);
    }
    /**
     *
     * @param   Production  $production
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function restore(Production $production)
    {
        $production->restore();
        return response()->json('success', 204);
    }
    /**
     *
     * @param   Request  $request
     *
     * @return \Modules\Preorder\Http\Resources\ProductionResource
     */
    public function saveShippingNumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'batch_id' => 'required',
            'production_id' => 'required|array',
        ]);
        if ($validator->fails()) {
            return new ProductionResource($validator->messages());
        }
        $batch = ProductionBatch::find($request->batch_id);
        $batch->update([
            'status' => $request->status,
            'start_production_date' => $request->start_production_date,
            'end_production_date' => $request->end_production_date,
        ]);
        foreach ($request->production_id as $key => $value) {
            $production     = Production::find($value);
            
            //update courier
            $transaction = Transaction::find($production->transaction_id);
            if ($transaction->count() > 0) {
                $transaction->courier_name  = $request->courier[$key];
                //mail to
                $transaction->update();
            }

            $tracking_number = trim($request->tracking_number[$key]);
            if (!empty($tracking_number) &&
                strlen($tracking_number) > 4 &&
                $request->status_production[$key] == 'shipped'
            ) {
                try {
                    if ($production->tracking_number !== $request->tracking_number[$key]) {
                        
                        Mail::to($production->getTransaction->email)->send(new WayBill($transaction));
                        $production->tracking_number = $tracking_number;
                    }
                } catch (\Swift_TransportException $e) {
                    $response = $e->getMessage();
                    break;
                }
            }
            $production->status = $request->status_production[$key];
            $production->update();
        }
        return new ProductionResource($batch);
    }

    public function updateCourier(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'courier_name' => 'required',
            'courier_type' => 'required',
            'courier_fee' => 'numeric',
            'production_id' => 'required'
        ]);

        if ($validator->fails()) {
            return new ProductionResource($validator->messages());
        } 
        $production         = Production::find($request->production_id);
        if (isset($production->getTransaction->id)) {
            $transaction_id     = $production->getTransaction->id;
            $transaction        = Transaction::find($transaction_id);
            $transaction->courier_name = $request->courier_name;
            $transaction->courier_type  = $request->courier_type;
            $transaction->courier_fee   = $request->courier_fee;
            $transaction->update();
        }
        return new ProductionResource($production);
    }
}
