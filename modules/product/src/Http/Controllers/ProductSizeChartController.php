<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Modules\Product\Product;
use Modules\Product\ProductSize;

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
        return view('product::product-size-chart.create', compact('data'));
    }

    public function show(int $id)
    {
        $productSize = ProductSize::findOrFail($id);
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        return view('product::product-size-chart.show', compact('productSize','data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'codes' => 'required',
        ]);

        $image      = '';
        $charts     = [];
        $heading    = [];

        if ($request->has('table')) {
            $body   = [];
            foreach ($request->table as $key => $value) {
                if ($key == 0) {
                    $heading[] = $value;
                }else{
                    $body[] = $value;
                }
            }
            foreach ($body as $key => $value) {
                $charts[] = array_combine($heading[0],$value);
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->image->store('public/images');
        }

        $json = json_encode($charts);

        $productSize = ProductSize::create([
            'name' => $request->name,
            'codes' => $request->codes,
            'charts' => $json,
            'image' => $image
        ]);

        return redirect()->route('product-size-chart.show', $productSize->id);
    }

    public function edit(int $id)
    {
        $productSize = ProductSize::findOrFail($id);
        $data['title'] = 'Product Size Chart';
        $data['back'] = route('product-size-chart.index');
        return view('product::product-size-chart.edit', compact('productSize','data'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'codes' => 'required',
            'image' => 'image'
        ]);

        $productSize = ProductSize::findOrFail($id);

        $charts = [];

        if ($request->has('body') && $request->has('head')) {
            foreach ($request->head[0] as $key => $value) {
                $charts[$value] = $request->body[$key];
            }
        }

        if ($request->hasFile('image')) {
            
            $image_path = storage_path($productSize->image);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->image->store('public/images');
            $productSize->update([
                'image' => $image
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
            'codes' => $request->codes
        ]);

        return redirect()->route('product-size-chart.show', $productSize->id);
    }

    public function destroy(int $id)
    {
        $productSize = ProductSize::findOrFail($id);
        $productSize->delete();
        return redirect()->route('product-size-chart.index');
    }
}
