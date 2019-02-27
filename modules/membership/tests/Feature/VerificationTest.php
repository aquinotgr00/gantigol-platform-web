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

    public function setUp()
    {
        parent::setUp();
        $this->artisan('passport:install');
    }
     /**
     * @test
     */
    public function verificationTokenSuccess(): void
    {
        Carbon::setTestNow();
        $member = factory(Member::class)->create();
        
        $token = factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.verification'), [
            "token"=>$token->token
        ]);

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function verificationTokenEmptyFailed(): void
    {
        $member = factory(Member::class)->create();
        factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.verification'), [
            
            "token"=>""
        ]);

         $response->assertSessionHasErrors(['token']);
    }

    /**
     * @test
     */
    public function verificationTokenWrongSuccess(): void
    {
        $member = factory(Member::class)->create();
        factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.verification'), [
            
            "token"=>"wrongtoken"
        ]);

         $response->assertStatus(422);
    }
}
