<?php

namespace Modules\Admin\Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Modules\Admin\Admin;
use Modules\Admin\AdminPrivilege;
use Modules\Admin\PrivilegeCategory;
use Modules\Admin\Privilege;

class ManageUserTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp()
    {
        parent::setUp();
        
        $privilegeCategory = PrivilegeCategory::create(['name'=>'User']);
        $privileges = [
            'View users',
            'Add user',
            'Edit user',
            'Enable/Disable user',
            'Edit user privileges'
        ];
        foreach ($privileges as $privilege) {
            Privilege::create(['name'=>$privilege, 'privilege_category_id'=>$privilegeCategory->id]);
        }
    }
    
    /**
     * @test
     */
    public function authorized_admin_get_users_index_route_should_have_access(): void
    {
        $user = factory(Admin::class)->create();
        $privilege = new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'view users')->value('id')]);
        $user->privileges()->save($privilege);
        
        $response = $this->actingAs($user, 'admin')
                ->get(route('users.index'));

        $response->assertSuccessful();
    }
    
    /**
     * @test
     */
    public function authorized_admin_post_users_store_route_with_valid_data_should_create_new_user(): void
    {
        $admin = factory(Admin::class)->create();
        $privilege = new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'add user')->value('id')]);
        $admin->privileges()->save($privilege);
        
        $response = $this->actingAs($admin, 'admin')->post(route('users.store'), [
            'name'=>'user satu',
            'email' => 'satu@mail.com',
            'password' => 'secret',
            'password_confirmation'=>'secret',
            'privilege'=>[
                ['privilege_id'=>Privilege::where('name', 'view users')->value('id')],
            ]
        ]);
        
        $response->assertRedirect(route('users.index'));
    }
    
    /**
     * @test
     */
    public function authorized_admin_put_users_update_route_with_valid_data_should_update_user(): void
    {
        $admin = factory(Admin::class)->create();
        $privilege = new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'edit user')->value('id')]);
        $admin->privileges()->save($privilege);
        
        $user = factory(Admin::class)->create();
        
        $response = $this->actingAs($admin, 'admin')->put(route('users.update', $user), [
            'name'=>'user updated',
            'email'=>'user@mail.com'
        ]);
        
        $response->assertRedirect(route('users.index'));
    }
    
    /**
     * @test
     */
    public function authorized_user_put_users_update_route_with_user_data_should_update_user_privilege(): void
    {
        $admin = factory(Admin::class)->create();
        $privileges = [
            new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'edit user')->value('id')]),
            new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'edit user privileges')->value('id')])
        ];
        $admin->privileges()->saveMany($privileges);
        
        $user = factory(Admin::class)->create();
        
        $response = $this->actingAs($admin, 'admin')->put(route('users.update', $user), [
            'name'=>'user updated',
            'email'=>'user@mail.com',
            'privilege'=>[
                ['privilege_id'=>Privilege::where('name', 'view users')->value('id')],
            ]
        ]);
        
        $response->assertRedirect(route('users.index'));
    }
    
    /**
     * @test
     */
    public function authorized_user_put_users_status_route_with_user_data_should_update_user_status(): void
    {
        $admin = factory(Admin::class)->create();
        $privilege = new AdminPrivilege(['privilege_id'=>Privilege::where('name', 'enable/disable user')->value('id')]);
        $admin->privileges()->save($privilege);
        
        $user = factory(Admin::class)->create();
        
        $response = $this->actingAs($admin, 'admin')->put(route('users.status', $user), []);
        
        $response->assertRedirect(route('users.index'));
    }
}
