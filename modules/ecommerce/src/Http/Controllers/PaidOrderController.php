<?php

namespace Modules\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Ecommerce\Order;
use Modules\Ecommerce\OrderItem;
use DataTables;
use DB;

class PaidOrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            
            $orders = Order::whereIn('order_status',[1,3,5]);
            if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('orders.created_at', [$request->startdate, $request->enddate]);
            }
            if ($request->has('invoice')) {
                $invoice = trim($request->invoice);
                
                if (!empty($invoice)) {
                    $orders = $orders->where('invoice_id','like', '%'.$invoice.'%')
                        ->orWhere('billing_name','like', '%'.$invoice.'%');
                }
            }
            if($request->has('attributesize')){
                $orders->leftjoin('order_items','orders.id','=','order_id')
                                ->leftjoin('product_variants','product_variants.id','productvariant_id')
                                ->where('product_variants.variant',$request->attributesize)
                                ->select('orders.*','order_items.productvariant_id','product_variants.variant');
            }
            return DataTables::of($orders)
                ->addColumn('id', function ($query) {
                    $checkbox = '<input type="checkbox" name="id[]" value="' . $query->id . '" />';
                    return $checkbox;
                })
                ->addColumn('order_status', function ($query) {
                    $status = config('ecommerce.order.status');
                    return array_keys($status)[$query->order_status];
                })
                ->addColumn('items', function ($query) {
                   $item = OrderItem::where('order_items.order_id',$query->id)
                            ->leftjoin('product_variants','product_variants.id','=','productvariant_id')
                            ->select('product_variants.sku')
                            ->get();
                            $itemList="";
                            foreach ($item as $key => $value) {
                                $linebreak = "";
                                if($key !=0){
                                    $linebreak = "<br/>";
                                }
                                $itemList = $itemList.$linebreak.$value->sku;
                            }
                    return  $itemList;
                })
                ->addColumn('price', function ($query) {
                   $item = OrderItem::where('order_items.order_id',$query->id)
                            ->leftjoin('product_variants','product_variants.id','=','productvariant_id')
                            ->select('product_variants.price')
                            ->get();
                            $itemList="";
                            foreach ($item as $key => $value) {
                                $linebreak = "";
                                if($key !=0){
                                    $linebreak = "<br/>";
                                }
                                $itemList = $itemList.$linebreak.$value->price;
                            }
                    return  $itemList;
                })
                /*->addColumn('shipping_tracking_number', function ($query) {
                    $input = '<input type="text" name="shipping_tracking_number[]" class="form-control" value="' . $query->shipping_tracking_number . '"/>';
                    return $input;
                })*/
                ->addColumn('shipment_name', function ($query) {
                    return strtoupper($query->shipment_name);
                })
                ->addColumn('invoice_id', function ($query) {
                    $link = '<a href="'.route('paid-order.show',$query->id).'" >';
                    $link .= $query->invoice_id;
                    $link .= '</a>';
                    return $link;
                })
                ->rawColumns(['id', 'shipping_tracking_number','invoice_id','items','price'])
                ->make(true);
        }

        $data = [
            'title' => 'Paid Order'
        ];

        return view('ecommerce::orders.index', compact('orders', 'data'));
    }

    public function show(int $id)
    {
        $order  = Order::findOrFail($id);
        $status = config('ecommerce.order.status','ecommerce');
        $desc   = config('ecommerce.order.desc','ecommerce');

        return view('ecommerce::orders.show', compact('order','status','desc'));
    }

    public function indexChart(Request $request)
    {   
            $orders = Order::where('order_status','!=', 0);
            if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
            }

            if($request->filter == 'year'){
                return  $orders->get()->groupBy(function($item)
                            {
                              return $item->created_at->format('M');
                            })->map(function ($date) {
                                return $date->sum('total_amount');
                            });
            }else{
                return $orders->get()->groupBy(function($item)
                            {
                              return $item->created_at->format('d-M');
                            })->map(function ($date) {
                                return $date->sum('total_amount');
                            });
            }
    }

    public function indexChartVariants(Request $request)
    {   
            $orders = OrderItem::leftjoin('orders','orders.id','=','order_id')
                                ->leftjoin('product_variants','product_variants.id','productvariant_id')
                                ->where('product_variants.variant',$request->attribute)
                                ->whereIn('order_status',[1,3,5]);
                                
            if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('orders.created_at', [$request->startdate, $request->enddate]);
            }
                $orders->select('orders.created_at','order_items.id');
            if($request->filter == 'year'){
                return  $orders->get()->groupBy(function($item)
                            {
                              return $item->created_at->format('M');
                            })->map(function ($date) {
                                return $date->count('order_items.id');
                            });
            }else{
                return $orders->get()->groupBy(function($item)
                            {
                              return $item->created_at->format('d-M');
                            })->map(function ($date) {
                                return $date->count('order_items.id');
                            });
            }
    }

    public function indexCard(Request $request){
        $arrayStatus = [1,3,5];
        $orders = Order::whereIn('order_status', $arrayStatus);
        $a = $this->revenueNow($orders,$request);
        $b = $this->revenuelast($orders,$request);
        $revenue = $a-$b;
        $data= [
                'percentage'=>($b == 0 ? 100 : ($revenue/$b)*100),
                'sales'=>$a
            ];
        return $data;
    }

    private function revenueNow($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
            }
           return $orders->sum('total_amount');
    }

    private function revenueLast($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->laststartdate, $request->lastenddate]);
            }
           return $orders->sum('total_amount');
    }
    public function indexCardSales(Request $request){
        $arrayStatus = [1,3,5];
        if($request->has('status')){
            $arrayStatus = $request->status;
        }
        $orders = Order::whereIn('order_status', $arrayStatus);
        $a = $this->revenueSalesNow($orders,$request);
        $b = $this->revenueSalesLast($orders,$request);
        $revenue = $a-$b;
        $data= [
                'percentage'=>($b == 0 ? 100 : ($revenue/$b)*100),
                'sales'=>$a
            ];
        return $data;
    }

    private function revenueSalesNow($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->startdate, $request->enddate]);
            }
           return $orders->count('id');
    }

    private function revenueSalesLast($orders,$request){
         if ($request->has(['startdate', 'enddate'])) {
                //
                $orders =$orders->whereBetween('created_at', [$request->laststartdate, $request->lastenddate]);
            }
           return $orders->count('id');
    }
    public function countProduct(Request $request){
        $item = OrderItem::leftjoin('orders','order_id','=','orders.id');
        $a = $this->countItemNow($item,$request);
        $b = $this->countItemLast($item,$request);
        $revenue = $a-$b;
        $data= [
                'percentage'=>($b == 0 ? 100 : ($revenue/$b)*100),
                'item'=>$a
            ];
        return $data;
    }
    private function countItemNow($item,$request){
        return $item->whereBetween('orders.created_at', [$request->startdate, $request->enddate])
                ->where('order_status','!=', 0)
                ->count(); 
    }
    private function countItemLast($item,$request){
        return $item->whereBetween('orders.created_at', [$request->laststartdate, $request->lastenddate])
                ->where('order_status','!=', 0)
                ->count();
    }

    public function countCustomer(Request $request){
        $item = Order::where('order_status','!=', 0)
                    ->groupBy('customer_id')
                    ->leftjoin('customer_profiles','customer_id','=','customer_profiles.id');
        $a = $this->countCustomerNow($item,$request);
        $b = $this->countCustomerLast($item,$request);
        $revenue = $a-$b;
        $data= [
                'percentage'=>($b == 0 ? 100 : ($revenue/$b)*100),
                'customer'=>$a
            ];
        return $data;
    }
    private function countCustomerNow($item,$request){
        return $item->whereBetween('orders.created_at', [$request->startdate, $request->enddate])->count(); 
    }
    private function countCustomerLast($item,$request){
        return $item->whereBetween('orders.created_at', [$request->laststartdate, $request->lastenddate])->count();
    }
}
