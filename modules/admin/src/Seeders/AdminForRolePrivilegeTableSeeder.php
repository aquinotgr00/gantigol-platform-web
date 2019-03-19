<?php

namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminForRolePrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
        
        DB::table('roles')->insert([array_merge(['name'=>'Admin'],$timestamp)]);
        
        $adminRole = DB::table('roles')->where('name','admin')->value('id');
        $canViewUsers = DB::table('privileges')->where('name','view users')->value('id');
        $canAddUser = DB::table('privileges')->where('name','add user')->value('id');
        $canEditUser = DB::table('privileges')->where('name','edit user')->value('id');
        $canManageProductVariant = DB::table('privileges')->where('name','manage product variant')->value('id');
        DB::table('role_privilege')->insert([
            array_merge(['role_id'=>$adminRole,'privilege_id'=>$canViewUsers],$timestamp),
            array_merge(['role_id'=>$adminRole,'privilege_id'=>$canAddUser],$timestamp),
            array_merge(['role_id'=>$adminRole,'privilege_id'=>$canEditUser],$timestamp),
            array_merge(['role_id'=>$adminRole,'privilege_id'=>$canManageProductVariant],$timestamp)
        ]);
    }
}
