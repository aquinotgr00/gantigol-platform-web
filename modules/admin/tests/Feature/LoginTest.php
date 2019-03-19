<?php

namespace Modules\Admin\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Admin\Admin;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function get_login_page_should_return_ok_response()
    {
        $response = $this->get(route('admin.login'));

        $response->assertSuccessful();
    }

    /**
     * @test
     */
    public function get_login_route_should_render_login_view()
    {
        $response = $this->get(route('admin.login'));

        $response->assertViewIs('admin::auth.login');
    }

    /**
     * @test
     */
    public function post_login_route_with_empty_data_should_return_redirect_back_response()
    {
        $this->get(route('admin.login'));
        $response = $this->post(route('admin.login'), []);

        $response->assertRedirect(route('admin.login'));
    }

    /**
     * @test
     */
    public function post_login_route_with_empty_data_should_return_response_with_validation_error()
    {
        $response = $this->post(route('admin.login'), []);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    /**
     * test
     */
    public function post_login_route_with_unregistered_email_should_return_response_with_validation_error()
    {
        $response = $this->post(route('admin.login'), [
            'email' => 'guest@example.com',
            'password' => 'secret'
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    /**
     * @test
     */
    public function post_login_route_with_invalid_password_should_return_redirect_response()
    {
        $admin = factory(Admin::class)->create(['password'=>'secret','active'=>true]);

        $response = $this->post(route('admin.login'), [
            'email' => $admin->email,
            'password' => 'invalid'
        ]);

        $response->assertSessionHasErrors(['email']);
    }
    
    /**
     * @test
     */
    public function post_login_route_with_inactive_admin_should_return_response_with_validation_error()
    {
        $password = 'secret';
        $admin = factory(Admin::class)->create(['password'=>$password,'active'=>false]);

        $response = $this->post(route('admin.login'), [
            'email' => $admin->email,
            'password' => $password
        ]);
        
        $response->assertSessionHasErrors(['active']);
    }

    /**
     * @test
     */
    public function post_login_route_with_valid_data_should_authenticate_admin()
    {
        $password = 'secret';
        $admin = factory(Admin::class)->create(['password'=>$password,'active'=>true]);

        $this->post(route('admin.login'), [
            'email' => $admin->email,
            'password' => $password
        ]);

        $this->assertAuthenticatedAs($admin, 'admin');
    }


    /**
     * @test
     */
    public function post_login_route_with_valid_data_should_return_redirect_response()
    {
        $password = 'secret';
        $admin = factory(Admin::class)->create(['password'=>$password,'active'=>true]);

        $response = $this->post(route('admin.login'), [
            'email' => $admin->email,
            'password' => $password
        ]);

        $response->assertRedirect(route('admin.dashboard'));
    }

    /**
     * @test
     */
    public function post_logout_route_should_log_admin_out()
    {
        $this->actingAs(factory(Admin::class)->create(), 'admin')
             ->post(route('admin.logout'));

        $this->assertGuest();
    }

    /**
     * @test
     */
    public function should_bypass_login_page_if_already_authenticated()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->get(route('admin.login'));

        $response->assertRedirect(route('admin.dashboard'));
    }
}
