<?php

namespace Modules\Membership\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Membership\Member;
use Modules\Membership\AccessToken;
use Modules\Membership\PasswordReset;
use Carbon\Carbon;
use Hash;

class ApiMembershipController extends Controller
{

    /**
     * Create a new parameter.
     *
     * @var mixed members
     */
    protected $members;

    /**
     * Create a new parameter.
     *
     * @var mixed access_token
     */
    protected $access_token;

    /**
     * Create a new parameter.
     *
     * @var mixed jobs
     */
    protected $jobs;

    /**
     * Create a new parameter.
     *
     * @var mixed password_reset
     */
    protected $password_reset;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Member $memberModel, AccessToken $accessTokenModel, PasswordReset $passwordreset)
    {
        $this->members = $memberModel;
        $this->access_token = $accessTokenModel;
        $this->password_reset =$passwordreset;
    }

    /**
     * using a new guard instance.
     *
     * @return mixed
     */
    protected function guard()
    {
        return Auth::guard('api');
    }

    /**
     * Create member
     *
     * @param \Illuminate\Http\Request  $request
     * @return mixed
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
        if (!is_null($request->url_act)) {
            $data=[
            'email'=>$request->email,
            'content'=>$request->url_act."/".$response
            ];
            $this->sendEmailAndToken($data);
        }
       
        return response()->json([
            'access_token'=>$response
        ], 201);
    }

    /**
     * sending email and access token to login / verification
     *
     * @param  array  $data
     *
     * @return void
     */
    public function sendEmailAndToken($data)
    {
        dispatch(new \Modules\Membership\Jobs\SendEmailMembership($data));
    }

    /**
     * sending email and access token to Forgot / reset password
     *
     * @param  array  $data
     *
     * @return void
     */
    public function sendEmailAndTokenReset($data)
    {
        dispatch(new \Modules\Membership\Jobs\SendEmailMembershipResetPassword($data));
    }


    /**
     * Login member and create token
     *
     * @param  \Illuminate\Http\Request  $request
     * @var boolean $remember_me
     * @return mixed|boolean
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

        $response = [ "message" => "Account does not exist"];
        $status = 422;

        if ($user) {
            if ($request->verification === "verified" && $user->verification != "verified") {
                $verification = false;
            }

            if (Hash::check($request->password, $user->password) && $verification) {
                $tokenResult = $user->createToken('Member Grant Client');
                $token = $tokenResult->token;
                $remember_me = $request->remember_me;
                
                if (!is_null($remember_me)) {
                    $token->expires_at = Carbon::now()->addWeeks(1);
                }

                $token->save();
                $response =[
                                'access_token' => $tokenResult->accessToken,
                                'token_type' => 'Bearer',
                                'expires_at' => Carbon::parse(
                                    $tokenResult->token->expires_at
                                )->toDateTimeString()
                            ];
                $status  = 200;
            }
        }
        return response()->json($response, $status);
    }

    /**
     * Access token login member to get oauth Client
     *
     * @param  string $data
     *
     * @return string $access_token
     */
    public function accessTokenMember($data)
    {
        
        $token = sha1(Carbon::now()->timestamp."".$data);
        $access_token = new AccessToken([
            'member_id' => $data,
            'token' => $token,
            'expired_at' =>Carbon::now()->addWeeks(1)
        ]);
        $access_token->save();
        return $access_token->token;
    }

      /**
     * Access token login member verification to verified member
     *
     * @param  string|null $token
     * @var boolean $access
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed|boolean $access
     * @return mixed|boolean
     */

    public function tokenMemberVerification(Request $request, $token = null)
    {
        
         $request->validate([
            'token' => 'required|string'
         ]);

        if (!is_null($token)) {
            $request->merge(['token' => $token]);
        }

        $access = $this->access_token->verifiedToken($request->token);

        if (!is_null($access)) {
            $user = $this->members->findForTokenAccess($access->member_id);

            if (!is_null($user)) {
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
                ], 200);
            }
        }
        

        $response = "Token does not exist.";
        return response($response, 422);
    }

     /**
     * Access handler token  verification
     *
     * @var  string $access
     * @param  \Illuminate\Http\Request  $request
     * @return mixed|boolean
     */

    public function verificationMemberHandle(Request $request)
    {

        $request->validate([
           'token' => 'required|string'
        ]);

        $response = response("Invalid token", 422);

        $access = $this->access_token->verifiedToken($request->token);
        if (!is_null($access)) {
            $this->members->memberVerification($access->member_id);

            $response = $this->tokenMemberVerification($request, $access->token);

            $this->access_token->expiringToken($access->token);
        }

        return $response;
    }

     /**
     * Access hadnler token  verification
     *
     * @return mixed
     *
     *
     */
    public function requestToken()
    {
        /** @var \App\User */
        $user = Auth::user();
        $response = $this->accessTokenMember($user->id);
        return response()->json(['access_token'=>$response], 200);
    }

     /**
     * requets to generate token for forgot password member using api and generate email
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed
     *
     *
     */
    public function createTokenForgotPassword(Request $request)
    {
         $request->validate([
            'email' => 'required|string|email',
         ]);
        $code = 404;
        $response = [
            'message'=>'Email not found'
            ];
        $member = $this->members->findForPassport($request->email);
        if (!is_null($member)) {
            $token = sha1(Carbon::now()->timestamp."".$member->id);
            $this->password_reset->insert(['token'=>$token,'email'=>$request->email]);

            $response = [
                'access_token'=>$token
            ];
            if (!is_null($request->url_act)) {
                $data=[
                    'email'=>$request->email,
                    'content'=>$request->url_act."/".$token
                    ];
                $this->sendEmailAndTokenReset($data);
            }
            $code = 200;
        }
        
        return response()->json(['data'=>$response], $code);
    }

     /**
     * change password using verified token
     *
     * @param   \Illuminate\Http\Request  $request
     * @return mixed
     *
     *
     */
    public function changePassword(Request $request)
    {
        $response = ["message"=>"Email / token not valid"];
        $code = 400;
        $check = $this->password_reset->where('token', $request->token)->first();
        if (!is_null($check)) {
            $member = $this->members->findForPassport($check->email);
            $this->members->where('email', $check->email)->update(['password'=>bcrypt($request->password)]);
            $token = $this->accessTokenMember($member->id);
            $response = ["message"=>"Success change password",
                        "access_token"=>$token
                        ];
            $code = 200;
        }
         return response()->json(['data'=>$response], $code);
    }

    /**
     * Update data member
     *
     * @param \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function updateMember(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'dob' => 'string',
            'address' => 'string',
            'subdistrict' => 'string',
            'city' => 'string',
            'province' => 'string',
            'postal_code' => 'string',
            'gender'=>'string'
        ]);
        $member = $this->members->where('id',$request->user()->id)->update([
            'name' => $request->name,
            'dob' => $request->dob,
            'address' => $request->address,
            'subdistrict' => $request->subdistrict,
            'city' => $request->city,
            'province' => $request->province,
            'gender'=> $request->gender,
            'postal_code' => $request->postal_code,
        ]);
        $response = "Data failed to update";
        if ($member) {
            $response = "Data updated";
        }
       
        return response()->json([
            'message'=>$response,
            'user'=>$request->user()
        ], 201);
    }

    /**
     * get data member
     *
     * @param \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function getMember(Request $request)
    {
       
        return $request->user();
    }
}
