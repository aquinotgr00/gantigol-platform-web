<?php
namespace Modules\Preorder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Preorder\PreOrder;
use Modules\Product\Product;
use Modules\Preorder\Jobs\BulkPaymentReminder;

class PreorderController extends Controller
{
    /**
     * show pre order list
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('preorder::preorder.index');
    }
    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function draft()
    {
        return view('preorder::preorder.draft');
    }
    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function closed()
    {
        return view('preorder::preorder.closed');
    }
    /**
     * create preorder
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('preorder::preorder.create');
    }
    /**
     * show single pre order
     *
     * @param integer $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $preOrder = PreOrder::findOrFail($id);
        return view('preorder::preorder.show', ['preOrder' => $preOrder]);
    }

    /**
     * Store a pre order
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        PreOrder::create($request->except(['_token']));

        Product::findOrFail($request->product_id)->update(['status' => 2]);

        return back();
    }
    /**
     * [edit description]
     *
     * @param   int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(int $id)
    {
        $preOrder = PreOrder::findOrFail($id);
        return view('preorder::preorder.edit', ['preOrder' => $preOrder]);
    }
}
