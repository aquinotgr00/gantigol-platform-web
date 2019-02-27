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

    public function setUp()
    {
        parent::setUp();
        $this->artisan('passport:install', ['--length' => 32]);
    }
     /**
     * @test
     */
    public function loginUsingUsernameSuccess(): void
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
    public function loginUsingEmailSuccess(): void
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
    public function loginUsingUsernameFailedUnverified(): void
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
    public function loginUsingEmailFailedUnverified(): void
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
    public function loginUsingUsernameFailed(): void
    {
        factory(Member::class)->create();

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
    public function loginUsingEmailFailed(): void
    {
        factory(Member::class)->create();

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
    public function loginUsingPasswordFailed(): void
    {
        factory(Member::class)->create();

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
    public function loginUsingPasswordEmptyFailed(): void
    {
        factory(Member::class)->create();

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
    public function loginUsingUsernameEmptyFailed(): void
    {
        factory(Member::class)->create();

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
    public function loginUsingUsernamePasswordEmptyFailed(): void
    {
        factory(Member::class)->create();

        $response = $this->post(route('auth.signin'), [
            
                "username"=> "",
                "password"=> "",
                "verification"=>"verified"
        ]);
        $response->assertSessionHasErrors(['username','password']);
    }
}
