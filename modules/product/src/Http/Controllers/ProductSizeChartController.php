<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Modules\ProductCategory\ProductCategory;
use Modules\Product\ProductSizeChart;
use Auth;

class ProductSizeChartController extends Controller
{
    public function index()
    {
        $this->authorize('view-size-chart', Auth::user());
        return view("product::product-size-chart.index");
    }

    public function create()
    {
        $this->authorize('create-size-chart', Auth::user());
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        $categories = ProductCategory::whereNull('parent_id')->with('subcategories')->get();
        return view('product::product-size-chart.create', compact('categories', 'data'));
    }

    public function show(int $id)
    {
        $this->authorize('view-size-chart', Auth::user());
        $productSize = ProductSizeChart::findOrFail($id);
        $categories = [];
        if (class_exists('\Modules\categories\categories')) {
            $categories = \Modules\categories\categories::whereNull('parent_id')
                ->with('subcategories')
                ->get();

        }
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');

        return view('product::product-size-chart.show', compact('productSize', 'categories', 'data'));
    }

    public function store(Request $request)
    {
        $this->authorize('create-size-chart', Auth::user());
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'image_id' => 'numeric',
        ]);

        $productSize = ProductSizeChart::create($request->except('_token'));

        return redirect()->route('product-size-chart.index');
    }

    public function edit(int $id)
    {
        $this->authorize('edit-size-chart', Auth::user());
        $productSize = ProductSizeChart::findOrFail($id);
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        $categories = ProductCategory::whereNull('parent_id')->with('subcategories')->get();
        return view('product::product-size-chart.edit', compact('productSize', 'data', 'categories'));
    }

    public function update(Request $request, int $id)
    {
        $this->authorize('edit-size-chart', Auth::user());
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $productSize = ProductSizeChart::findOrFail($id);
        $productSize->update($request->except('_token', '_method'));

        return redirect()->route('product-size-chart.index');
    }

    public function destroy(int $id)
    {
        $productSize = ProductSizeChart::findOrFail($id);
        if ($productSize->delete()) {
            return response()->json(['data' => 1]);
        } else {
            return response()->json(['data' => 0]);
        }
    }

    public function getAllDatatables()
    {
        $variant = ProductSizeChart::all();
        return Datatables::of($variant)
            ->addColumn('name', function ($data) {
                return '<a href="' . route('product-size-chart.show', $data->id) . '">' . $data->name . '</a>';
            })
            ->addColumn('image', function ($data) {
                return '<img src="' . $data->image . '" alt="' . $data->name . ' image" style="width:80px;">';
            })
            ->addColumn('action', function ($data) {
                
                $user = Auth::user();
                $button = '';

                if (Gate::forUser($user)->allows('edit-size-chart')) {
                    $button .= '<a href="' . route('product-size-chart.edit', $data->id) . '" class="btn btn-table circle-table edit-table"';
                    $button .= 'data-toggle="tooltip" data-placement="top" title="Edit"></a>';
                }

                if (Gate::forUser($user)->allows('delete-size-chart')) {

                    $button .= '<button type="button" onclick="deleteItem(' . $data->id . ')" class="btn btn-table circle-table delete-table" data-toggle="tooltip"';
                    $button .= ' data-placement="top" title="Delete"></button>';
                }

                return $button;
            })
            ->rawColumns(['name', 'image', 'action'])
            ->toJson();

    }
}
