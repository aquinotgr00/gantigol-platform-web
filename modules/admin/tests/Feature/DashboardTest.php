<?php

namespace Modules\Admin\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Admin\Admin;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function admin_should_have_access()
    {
        $response = $this->actingAs(factory(Admin::class)->create(), 'admin')
            ->get(route('admin.dashboard'));

        $response->assertSuccessful();
    }

    /**
     * @test
     */
    public function not_admin_should_be_redirected_to_admin_login_page()
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirect(route('admin.login'));
    }
}
