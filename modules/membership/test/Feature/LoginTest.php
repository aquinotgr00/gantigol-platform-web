<?php

namespace Modules\Membership\Tests\Feature;

use Tests\TestCase;
use Modules\Membership\Member;
use Modules\Membership\AccessToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class LoginTest extends TestCase
{
     use RefreshDatabase;

     public function setUp() {
        parent::setUp();
        $this->artisan('passport:install');
    }
     /**
     * @test
     */
    public function login_using_username_success(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> $member->username,
				"password"=> "open1234",
				"verification"=> "verified"
        ]);

        $response->assertStatus(200);
    }

     /**
     * @test
     */
    public function login_using_email_success(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> $member->email,
				"password"=> "open1234",
				"verification"=> "verified"
        ]);

        $response->assertStatus(200);
    }

     /**
     * @test
     */
    public function login_using_username_failed_unverified(): void
    {
        $member = factory(Member::class)->create(['verification'=>'unverified']);

        $response = $this->post(route('auth.signin'), [
            
				"username"=> $member->username,
				"password"=> "open1234",
				"verification"=>"verified"
        ]);
        $response->assertStatus(422);
    }

     /**
     * @test
     */
    public function login_using_email_failed_unverified(): void
    {
        $member = factory(Member::class)->create(['verification'=>'unverified']);

        $response = $this->post(route('auth.signin'), [
            
				"username"=> $member->email,
				"password"=> "open1234",
				"verification"=>"verified"
        ]);
        $response->assertStatus(422);
    }

     /**
     * @test
     */
    public function login_using_username_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "notregistered",
				"password"=> "open1234",
				"verification"=>"verified"
        ]);
        $response->assertStatus(422);
    }


     /**
     * @test
     */
    public function login_using_email_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "notregistered@test.com",
				"password"=> "open1234",
				"verification"=>"verified"
        ]);
        $response->assertStatus(422);
    }

     /**
     * @test
     */
    public function login_using_password_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "notregistered@test.com",
				"password"=> "errorpassword",
				"verification"=>"verified"
        ]);
        $response->assertStatus(422);
    }

     /**
     * @test
     */
    public function login_using_password_empty_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "notregistered@test.com",
				"password"=> "",
				"verification"=>"verified"
        ]);
        $response->assertSessionHasErrors(['password']);
    }

     /**
     * @test
     */
    public function login_using_username_empty_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "",
				"password"=> "open1234",
				"verification"=>"verified"
        ]);
        $response->assertSessionHasErrors(['username']);
    }

    /**
     * @test
     */
    public function login_using_username_password_empty_failed(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
				"username"=> "",
				"password"=> "",
				"verification"=>"verified"
        ]);
        $response->assertSessionHasErrors(['username','password']);
    }

     /**
     * @test
     */
    public function login_token_success(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.signin'), [
            
			"token"=>$token->token
        ]);

        $this->assertTrue(true);
	}

	/**
     * @test
     */
    public function login_token_empty_failed(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.signin'), [
            
			"token"=>""
        ]);

         $response->assertSessionHasErrors(['token']);
	}

	/**
     * @test
     */
    public function login_token_wrong_failed(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.signin'), [
            
			"token"=>"wrongtoken"
        ]);

         $response->assertStatus(422);
	}

}
