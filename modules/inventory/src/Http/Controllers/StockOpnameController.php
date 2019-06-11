<?php

namespace Modules\Inventory\Http\Controllers;

use Modules\Inventory\Adjustment;
use Modules\Inventory\Http\Requests\StoreStockOpname;
use Modules\Product\ProductVariant;
use Modules\Inventory\StockOpname;
use Modules\Inventory\StockOpnameList;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class StockOpnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockOpname = StockOpname::with('user')->orderBy("date", "DESC")->get();
        $contentTitleExtra = [
            'component' => 'content-title-button',
            'data' => ['buttonLabel' => 'Add new', 'routeName' => 'stockopname.create']
        ];
        $data = [
            'title' => 'Stock Opname',
            
        ];
        return view('inventory::stockopname.index', compact('stockOpname', 'contentTitleExtra','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productVariants = ProductVariant::with(['product' => function($query) {
            $query->with(['category.parentCategories'])->where('status', 1);
        }])->orderBy("created_at", "DESC")->get();
        $lastOpnameDate = null;
        //$lastOpnameDate = StockOpname::orderby('created_at', 'DESC')->value('date')->addDay()->format('d-m-Y');
        $data = [
            'title'=> 'New Stock Opname',
            'back'=> route('stockopname.index'),
        ];
        return view('inventory::stockopname.create', compact('productVariants', 'lastOpnameDate','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockOpname $request)
    {
        $stocktake = StockOpname::create([
            'date'=>Carbon::createFromFormat('d-m-Y', $request->input('date')),
            'user_id'=>Auth::id()
        ]);
        
        $stocktake->stockOpnameList()->createMany($request->input('opnam'));
        
        DB::update('UPDATE product_variants v JOIN stock_opname_list o ON v.id=o.product_variants_id SET v.quantity_on_hand=o.qty WHERE o.stock_opname_id=?',[$stocktake->id]);
        
        return redirect()->route('stockopname.index')->with('successMessage', 'Stock take completed successfully');
    }

    public function showOpnameConfirmForms($stockOpname){
        $sOpname = Session::get("stockopname");
        $sOpnameList = Session::get("stockopname_list");

        /*
        $stockOpnameList = StockOpnameList::with(['productvariant.product'])->where('stock_opname_id', $stockOpname->id)->get();
        $selected = $stockOpname->id;
        */
        
        return view('inventory::stockopname.confirm', compact('stockOpname', 'sOpname', 'sOpnameList','data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Modules\Inventory\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(StockOpname $stockOpname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\Inventory\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOpname $stockopname)
    {
        $stockOpnameList = StockOpnameList::with(['productvariant.product'])->where('stock_opname_id', $stockopname->id)->orderBy("created_at", "DESC")->get();

        foreach ($stockOpnameList as $i => $row) {
            //TODO: investigate these raw queries
            $checkVariantSoldOutPrior = DB::select(DB::raw("SELECT order_items.productvariant_id,SUM(qty) AS variant_sold_prior
                                                                        FROM order_items
                                                                        JOIN orders ON order_items.order_id=orders.id
                                                                        WHERE date(orders.created_at) < '{$stockopname->date}' AND productvariant_id = {$row->productvariant->id}
                                                                        GROUP BY productvariant_id"));

            $checkVariantSoldOutPrior = !empty($checkVariantSoldOutPrior[0]->variant_sold_prior) ? $checkVariantSoldOutPrior[0]->variant_sold_prior : 0;

            $checkVariantSoldOutWithIn = DB::select(DB::raw("SELECT order_items.productvariant_id,SUM(qty) AS variant_sold_within
                                                                        FROM order_items
                                                                        JOIN orders ON order_items.order_id=orders.id
                                                                        WHERE orders.created_at BETWEEN '{$stockopname->date}' AND DATE_ADD('{$stockopname->date}', INTERVAL 1 DAY) AND productvariant_id = {$row->productvariant->id}
                                                                        GROUP BY productvariant_id"));

            $checkVariantSoldOutWithIn = !empty($checkVariantSoldOutWithIn[0]->variant_sold_prior) ? $checkVariantSoldOutWithIn[0]->variant_sold_prior : 0;


            $checkVariantAdjPrior = DB::select(DB::raw("SELECT product_variants_id,SUM(IF(method='+',1,-1)* CAST(qty AS SIGNED)) AS variant_adjustment_prior
                                                                        FROM adjustments
                                                                        WHERE date(created_at) < '{$stockopname->date}' AND product_variants_id = {$row->productvariant->id}
                                                                        GROUP BY product_variants_id"));

            $checkVariantAdjPrior = !empty($checkVariantAdjPrior[0]->variant_adjustment_prior) ? $checkVariantAdjPrior[0]->variant_adjustment_prior : 0;


            $checkVariantAdjWithIn = DB::select(DB::raw("SELECT product_variants_id,SUM(IF(method='+',1,-1)* CAST(qty AS SIGNED)) AS variant_adjustment_within
                                                                        FROM adjustments
                                                                        WHERE created_at BETWEEN '{$stockopname->date}' AND DATE_ADD('{$stockopname->date}', INTERVAL 1 DAY) AND product_variants_id = {$row->productvariant->id}
                                                                        GROUP BY product_variants_id"));

            $checkVariantAdjWithIn = !empty($checkVariantAdjWithIn[0]->variant_adjustment_prior) ? $checkVariantAdjWithIn[0]->variant_adjustment_prior : 0;

            $stockOpnameList[$i]->stockNow = $row->productvariant->initial_balance - $checkVariantSoldOutPrior + $checkVariantAdjPrior - $checkVariantSoldOutWithIn + $checkVariantAdjWithIn;
        }

        $selected = $stockopname->id;

        return view('inventory::stockopname.edit', compact('stockopname', 'stockOpnameList','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Modules\Inventory\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockOpname $stockOpname)
    {
        $stockOpname->update($request->all());

        $totalOpnameList = $request->input('opnameList');
        if (!empty($totalOpnameList)) {

            for ($i = 1;$i <= $totalOpnameList;$i++) {
                $stockOpnameListId = $request->input("stockOpnameListId{$i}");
                $note = $request->input("note{$i}");

                if (!empty($stockOpnameListId) AND !empty($note)) {
                    $checkOpnameList = StockOpnameList::where('id', $stockOpnameListId)->first();

                    if (!empty($checkOpnameList)) {
                        StockOpnameList::where('id', $stockOpnameListId)->update(['note' => $note]);
                    }
                }
            }
        }

        return redirect()->route('stockopname.index');
    }

    public function doStoreStockOpname(Request $request)
    {
        $input = $request->all();

        $authId = Auth::id();
        if (empty($authId)) {
            return redirect()->route('stockopname.index');
        }

        $sOpname = Session::get("stockopname");
        $sOpnameList = Session::get("stockopname_list");

        $stockOpname = StockOpname::create([
            'date' => $input['date'],
            'users_id' => $authId
        ]);

        $totalOpnameList = $request->input('opnameList');
        if (!empty($totalOpnameList)) {
            for ($i = 0;$i < $totalOpnameList;$i++) {
                $note = $request->input("note{$i}");
                $opnameList = !empty($sOpnameList[$i]) ? $sOpnameList[$i] : array();

                if (!empty($opnameList) AND !empty($note)) {
                    $checkVariantStock = ProductVariant::with("product")->where('id', $opnameList['product_variants_id'])->first();

                    if (!empty($checkVariantStock)) {
                        $status = false;

                        if ($checkVariantStock->quantity_on_hand == $opnameList['qty']) {
                            $status = true;
                        }
                        else {
                            Adjustment::create([
                                'qty' => $opnameList['qty'], 
                                'product_variants_id' => $opnameList['product_variants_id'], 
                                'users_id' => Auth::id(), 
                                'method' => ($opnameList['quantity_on_hand'] < $opnameList['qty'])?'+':'-',
                                'type' => config('starcross.adjustment.type.StockTake'),
                                'note' => $note
                            ]);
                        }

                        StockOpnameList::create(['stock_opname_id' => $stockOpname->id, 'product_variants_id' => $opnameList['product_variants_id'], 'qty' => $opnameList['qty'], 'note' => $note, 'is_same' => $status]);
                    }
                }
            }
        }

        return redirect()->route('stockopname.index');
    }

}