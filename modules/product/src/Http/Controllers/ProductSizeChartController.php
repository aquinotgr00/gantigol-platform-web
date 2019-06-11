<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Modules\ProductCategory\ProductCategory;
use Modules\Product\ProductSizeChart;

class ProductSizeChartController extends Controller
{
    public function index()
    {
        $data['title'] = 'Product Size Chart';
        return view("product::product-size-chart.index", compact('data'));
    }

    public function create()
    {
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        $productCategory = ProductCategory::whereNull('parent_id')->with('subcategories')->get();
        return view('product::product-size-chart.create', compact('productCategory', 'data'));
    }

    public function show(int $id)
    {
        $productSize = ProductSizeChart::findOrFail($id);
        $categories = [];
        if (class_exists('\Modules\ProductCategory\ProductCategory')) {
            $categories = \Modules\ProductCategory\ProductCategory::whereNull('parent_id')
                            ->with('subcategories')
                            ->get();            
            
        }
        $data['title']  = 'Product Size Chart';
        $data['back']   = route('product-size-chart.index');

        return view('product::product-size-chart.show', compact('productSize','categories', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $productSize = ProductSizeChart::create($request->except('_token'));

        return redirect()->route('product-size-chart.index');
    }

    public function edit(int $id)
    {
        $productSize = ProductSizeChart::findOrFail($id);
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        return view('product::product-size-chart.edit', compact('productSize', 'data'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $productSize = ProductSizeChart::findOrFail($id);

        $charts = [];

        if ($request->has('body') && $request->has('head')) {
            foreach ($request->head[0] as $key => $value) {
                $charts[$value] = $request->body[$key];
            }
        }

        if ($request->hasFile('image')) {

            $image_path = storage_path($productSize->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->image->store('public/images');
            $productSize->update([
                'image' => $image,
            ]);
        }
        if ($charts) {
            $json = json_encode($charts);
            $productSize->update([
                'charts' => $json,
            ]);
        }

        $productSize->update([
            'name' => $request->name,
            'codes' => $request->codes,
        ]);

        return redirect()->route('product-size-chart.show', $productSize->id);
    }

    public function destroy(int $id)
    {
        $productSize = ProductSizeChart::findOrFail($id);
        if ($productSize->delete()) {
            return response()->json(['data'=>1]);
        }else{
            return response()->json(['data'=>0]);
        }
    }

    public function getAllDatatables()
    {
        $variant = ProductSizeChart::all();
        return Datatables::of($variant)
            ->addColumn('name', function ($data) {
                return '<a href="'.route('product-size-chart.show',$data->id).'">' . $data->name . '</a>';
            })
            ->addColumn('image', function ($data) {
                $image_url = str_replace('public', 'storage', $data->image);
                $image_url = url($image_url);

                return '<img src="' . $image_url . '" alt="#">';
            })
            ->addColumn('action', function ($data) {
                $button = '<a href="' . route('product-size-chart.edit', $data->id) . '" class="btn btn-table circle-table edit-table"';
                $button .= 'data-toggle="tooltip" data-placement="top" title="Edit"></a>';
                $button .= '<button type="button" onclick="deleteItem(' . $data->id . ')" class="btn btn-table circle-table delete-table" data-toggle="tooltip"';
                $button .= ' data-placement="top" title="Delete"></button>';
                return $button;
            })
            ->rawColumns(['name','image','action'])
            ->toJson();
            
    }
}
