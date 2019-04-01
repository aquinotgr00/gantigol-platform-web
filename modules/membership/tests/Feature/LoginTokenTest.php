<?php

namespace Modules\Membership\Tests\Feature;

use Tests\TestCase;
use Modules\Membership\Member;
use Modules\Membership\AccessToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class LoginTokenTest extends TestCase
{
     use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        $this->artisan('passport:install', ['--length' => 512]);
    }
    
    /**
     * @test
     */
    public function loginTokenSuccess(): void
    {
        $member = factory(Member::class)->create();
        $token = factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.signin'), [
            
            "token"=>$token->token
        ]);

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function loginTokenEmptyFailed(): void
    {
        $member = factory(Member::class)->create();
        factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.signin'), [
            
            "token"=>""
        ]);

         $response->assertSessionHasErrors(['token']);
    }

    /**
     * @test
     */
    public function loginTokenWrongFailed(): void
    {
        $member = factory(Member::class)->create();
        factory(AccessToken::class)->create([
            'member_id'=>$member->id,
            'token'=>sha1(Carbon::now()->timestamp."".$member->id)
            ]);
        $response = $this->post(route('auth.token.signin'), [
            
            "token"=>"wrongtoken"
        ]);

         $response->assertStatus(422);
    }
}
