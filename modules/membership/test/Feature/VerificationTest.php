<?php

namespace Modules\Membership\Tests\Feature;

use Tests\TestCase;
use Modules\Membership\Member;
use Modules\Membership\AccessToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class VerificationTest extends TestCase
{
     use RefreshDatabase;

     public function setUp() {
        parent::setUp();
        $this->artisan('passport:install');
    }
     /**
     * @test
     */
    public function verification_token_success(): void
    {
        Carbon::setTestNow();
        $member = factory(Member::class)->create();
        
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.verification'), [
			"token"=>$token->token
        ]);
        $response->assertStatus(200);
	}

    /**
     * @test
     */
    public function verification_token_empty_failed(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.verification'), [
            
            "token"=>""
        ]);

         $response->assertSessionHasErrors(['token']);
    }

    /**
     * @test
     */
    public function verification_token_wrong_success(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
        $response = $this->post(route('auth.token.verification'), [
            
            "token"=>"wrongtoken"
        ]);

         $response->assertStatus(422);
    }

    // /**
    //  * @test
    //  */
    // public function requesting_user_token_verification(): void
    // {   
    //     $member = factory(Member::class)->create();
    //     $token = factory(AccessToken::class)->create(['member_id'=>$member->id,'token'=>sha1(Carbon::now()->timestamp."".$member->id)]);
    //     $getData = $this->post(route('auth.token.verification'), [
            
    //         "token"=>$token->token
    //     ]);
    //     // dump($getData);
    //      // $response = $this->post(route('auth.token.verification'), [],[],[],
    //      //    [
    //      //        'HTTP_Authorization' => 'Bearer ' . $getData->access_token,
    //      //        'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest'
    //      //    ]);
    //         $getData->assertStatus(200);

    // }

}
