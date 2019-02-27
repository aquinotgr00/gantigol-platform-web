<?php

namespace Modules\Membership\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Membership\Member;
use Modules\Membership\accessToken;
use Carbon\Carbon;
use Hash;

class ApiMembershipController extends Controller
{

    protected $members;
    protected $access_token;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->members = new Member();
        $this->access_token = new accessToken();
    }
    protected function guard()
    {
        return Auth::guard('api');
    }
    /**
     * Create member
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
        $response = $this->accessTokenMember($member->id);
        return response()->json([
            'access_token'=>$response
        ], 201);
    }

    /**
     * Login member and create token
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
        $verification = true;

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'verification' => 'required|string',
            'remember_me' => 'boolean'
        ]);

       $user = $this->members->findForPassport($request->username);


    if ($user) {

            if($request->verification === "verified" && $user->verification != "verified"){
                $verification = false;
               }

            if (Hash::check($request->password, $user->password) && $verification) {
                $tokenResult = $user->createToken('Member Grant Client');
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
        ],200);
    }

    /**
     * Access token login member
     *
     * @param  [int] id
     *
     * @return [string] access_token
     */

    public function accessTokenMember($data){
        
        $token = sha1(Carbon::now()->timestamp."".$data);
        $access_token = new accessToken([
            'member_id' => $data,
            'token' => $token,
            'expired_at' =>Carbon::now()->addWeeks(1)
        ]);
        $access_token->save();
        return $access_token->token;
    }

        /**
     * Access token login member verification
     *
     * @param  [int] token
     *
     * @return [string] access_token
     */
    public function findToken($token){

        $response = $this->access_token->verifiedToken($token);

        return $response;
    }

      /**
     * Access token login member verification
     *
     * @param  [int] token
     *
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */

    public function accessTokenMemberVerification($token=null,Request $request){
        
         $request->validate([
            'token' => 'required|string'
        ]);

         if($token){
            $request->merge(['token' => $token]); 

        }

        $access = $this->findToken($request->token);


         
        if($access){
            $user = $this->members->findForTokenAccess($access->member_id);

            if($user){

                $tokenResult = $user->createToken('Member Grant Client');
                $token = $tokenResult->token;

                $token->expires_at = Carbon::now()->addWeeks(1);

                $token->save();
                return response()->json([
                    'access_token' => $tokenResult->accessToken,
                    'token_type' => 'Bearer',
                    'expires_at' => Carbon::parse(
                        $tokenResult->token->expires_at
                    )->toDateTimeString()
                ],200);
            }

        }
        

        $response = "Token does not exist.";
        return response($response, 422);     

    }

     /**
     * Access hadnler token  verification
     *
     * @param  [int] token
     *
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */

     public function verificationMemberhandler(Request $request){

        $request->validate([
            'token' => 'required|string'
        ]);

        $response = response("Invalid token", 422); 

        $access = $this->findToken($request->token);
        if($access){
        
            $this->members->memberVerification($access->member_id);

            $response = $this->accessTokenMemberVerification($access->token,$request);

            $this->access_token->expiringToken($access->token);
        }

        return $response;
            
     }

     /**
     * Access hadnler token  verification
     *
     * @param  [int] auth token
     *
     * @return [string] access_token
     *
     *
     */
     public function requestToken(request $request){
       $user = Auth::user(); 
       $response = $this->accessTokenMember($user->id);
        return response()->json(['access_token'=>$response], 200); 
     }


}
