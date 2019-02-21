<?php

namespace Modules\Membership\Tests\Feature;

use Tests\TestCase;
use Modules\Membership\Member;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
     use RefreshDatabase;

    /**
     * @test
     *
     * @return void
     */
    public function registration_success()
    {
    	$response = $this->post(route('auth.signup'), [
            	"name"=> "test postman",
				"username"=> "postman",
				"email"=> "test@postman.com",
				"phone"=> "+2298929992",
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"password"=> "open1234",
				"password_confirmation"=>"open1234"
        ]);
        $this->assertTrue(true);
    }

     /**
     * @test
     */
    public function registration_failed_email_already_used(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signup'), [
            
            	"name"=> "test postman",
				"username"=> "postman",
				'email' => $member->email,
				"phone"=> "+2298929992",
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"password"=> "open1234",
				"password_confirmation"=>"open1234"
        ]);

        $response->assertSessionHasErrors(['email']);
    }

     /**
     * @test
     */
    public function registration_failed_email_wrong_format(): void
    {

        $response = $this->post(route('auth.signup'), [
            
            	"name"=> "test postman",
				"username"=> "postman",
				'email' => "wrong format",
				"phone"=> "+2298929992",
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"password"=> "open1234",
				"password_confirmation"=>"open1234"
        ]);

        $response->assertSessionHasErrors(['email']);
    }

     /**
     * @test
     */
    public function registration_failed_username_already_used(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signup'), [
            
            	"name"=> "test postman",
				"username"=> $member->username,
				'email' => "test@postman.com",
				"phone"=> "+2298929992",
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"password"=> "open1234",
				"password_confirmation"=>"open1234"
        ]);

        $response->assertSessionHasErrors(['username']);
    }

     /**
     * @test
     */
    public function registration_failed_phone_already_used(): void
    {
        $member = factory(Member::class)->create();

        $response = $this->post(route('auth.signup'), [
            
            	"name"=> "test postman",
				"username"=> "testpostman",
				'email' => "test@postman.com",
				"phone"=> $member->phone,
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"password"=> "open1234",
				"password_confirmation"=>"open1234"
        ]);

        $response->assertSessionHasErrors(['phone']);
    }

}
