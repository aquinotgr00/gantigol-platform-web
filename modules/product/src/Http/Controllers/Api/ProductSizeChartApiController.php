<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Modules\Product\ProductSize;
use Validator;

class ProductSizeChartApiController extends Controller
{
    public function index()
    {
        $productSize = ProductSize::paginate(25);
        return response()->json($productSize);
    }

    public function show(int $id)
    {
        try {
            $productSize = ProductSize::findOrFail($id);
            return response()->json($productSize);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['data' => 'not found']);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'codes' => 'required',
            'charts' => 'json',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }
        $productSize = ProductSize::create([
            'name' => $request->name,
            'codes' => $request->codes,
            'charts' => $request->charts,
        ]);
        return response()->json($productSize);
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'codes' => 'required',
            'charts' => 'json',
        ]);
        try {
            $productSize = ProductSize::findOrFail($id);
            $productSize->update([
                'name' => $request->name,
                'codes' => $request->codes,
                'charts' => $request->charts
            ]);
            return response()->json($productSize);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['data' => 'not found']);
        }
    }
}
