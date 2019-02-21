<?php

namespace Modules\Membership\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Membership\Member;
use Carbon\Carbon;
use Hash;

class ApiMembershipController extends Controller
{

    protected $members;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:api')->except('logout');
        $this->members = new Member();
    }
    protected function guard()
    {
        return Auth::guard('api');
    }
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] username
     * @param  [string] phone
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' =>'required|string|alpha_num|unique:members',
            'email' => 'required|string|email|unique:members',
            'phone' =>'required|string|unique:members',
            'dob' => 'string',
            'address' => 'string',
            'subdistrict' => 'string',
            'city' => 'string',
            'province' => 'string',
            'postal_code' => 'string',
            'gender'=>'string',
            'password' => 'required|string|confirmed'
        ]);
        $member = new Member([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address,
            'subdistrict' => $request->subdistrict,
            'city' => $request->city,
            'province' => $request->province,
            'gender'=> $request->gender,
            'postal_code' => $request->postal_code,
            'password' => bcrypt($request->password)
        ]);
        $member->save();
        $response = $this->signin($request);
        return response()->json([
            $response
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @param  [string] username
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function signin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
       $user = $this->members->findForPassport($request->username);

    if ($user) {

        if (Hash::check($request->password, $user->password)) {
            $tokenResult = $user->createToken('Laravel Password Grant Client');
            $token = $tokenResult->token;
            if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

            $token->save();
        } else {
            $response = "Account does not exist";
            return response($response, 422);
        }

    } else {
        $response = 'Account does not exist';
        return response($response, 422);
    }

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

}
