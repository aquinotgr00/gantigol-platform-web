<?php

namespace Modules\Customers\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Customers\CustomerProfile;
use Session;
use Validator;
use DataTables;

class CustomerController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Customers'
        ];
        return view('customers::customers.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'title' => 'Add New Customer',
            'back' => route('list-customer.index')
        ];
        return view('customers::customers.create',compact('data'));
    }

    public function show(Request $request,int $id)
    {
        $customer   = CustomerProfile::findOrFail($id);
        $data       = [
            'title' => ucwords($customer->name),
            'back' => route('list-customer.index')
        ];

        if (request()->ajax()) {        
            if (class_exists('\Modules\Ecommerce\Order')) {
                $orders = \Modules\Ecommerce\Order::where('customer_id',$customer->id)
                ->with('items')
                ->get();
                return DataTables::of($orders)
                ->addColumn('status', function($query){
                    return array_keys(config('ecommerce.order.status'))[$query->order_status];
                })
                ->make(true);
            }
            
        }

        return view('customers::customers.show', compact('customer', 'data'));
    }

    public function edit(int $id)
    {
        return view('customers::customers.edit');
    }
}
