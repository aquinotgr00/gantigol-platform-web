<?php

namespace Modules\Customers\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Modules\Customers\CustomerProfile;
use Modules\Customers\Http\Resources\CustomerResource;
use Validator;

class CustomerApiController extends Controller
{
    public function index(Request $request)
    {
        $customer = CustomerProfile::with('user')
        ->paginate();
        return new CustomerResource($customer);
    }

    public function create()
    {
        $rules      = (new \Modules\Customers\Http\Requests\CustomerRequest)->rules();
        return response()->json($rules);
    }
    /**
     * [show description]
     *
     * @param   int  $id
     *
     * @return  [type]    [return description]
     */
    public function show(int $id)
    {
        try {
            $customer = CustomerProfile::findOrFail($id);
            $customer->user;
            return new CustomerResource($customer);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['data'=>$exception->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'address' => 'required',
            'subdistrict_id' => 'numeric',
            'birthdate' => 'required|date'
        ]);
        
        if ($validator->fails()) {
            return new CustomerResource($validator->messages());
        }
        
        $customer = CustomerProfile::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'subdistrict_id' => $request->subdistrict_id,
            'birthdate' => $request->birthdate,
            'phone' => $request->phone,
            'zip_code' => $request->zip_code
        ]);

        return new CustomerResource($customer);
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'date',
        ]);
        
        if ($validator->fails()) {
            return new CustomerResource($validator->messages());
        }
        try {
            $customer = CustomerProfile::findOrFail($id);
            $customer->update($request->except('_method','_token'));
            return new CustomerResource($customer);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['data'=>$exception->getMessage()]);
        }
    }
}
