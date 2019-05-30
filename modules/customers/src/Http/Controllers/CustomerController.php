<?php

namespace Modules\Customers\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Customers\CustomerProfile;
use Session;
use Validator;

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
        return view('customers::customers.create');
    }

    public function show(int $id)
    {
        $customer   = CustomerProfile::findOrFail($id);
        $data       = [
            'title' => ucwords($customer->name),
            'back' => route('list-customer.index')
        ];
        return view('customers::customers.show', compact('customer', 'data'));
    }

    public function edit(int $id)
    {
        return view('customers::customers.edit');
    }
}
