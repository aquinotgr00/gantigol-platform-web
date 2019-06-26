<?php

namespace Modules\Customers\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Customers\CustomerProfile;
use DataTables;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers::customers.index');
    }

    public function create()
    {
        $data = [
            'title' => 'Add New Customer',
            'back' => route('list-customer.index')
        ];
        return view('customers::customers.create',compact('data'));
    }

    public function show(CustomerProfile $list_customer)
    {
        $customer   = $list_customer;
        $data       = [
            'title' => ucwords($customer->name),
            'back' => route('list-customer.index')
        ];
        
        if (request()->ajax()) {
            if (class_exists('\Modules\Ecommerce\Order')) {
                $orders = \Modules\Ecommerce\Order::where('customer_id',$customer->id)->get();
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
