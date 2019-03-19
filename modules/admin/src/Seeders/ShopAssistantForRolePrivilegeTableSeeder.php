<?php
namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShopAssistantForRolePrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
        DB::table('roles')->insert([array_merge(['name'=>'Shop Assistant'],$timestamp)]);
        
        $shopAssistantRole = DB::table('roles')->where('name','shop assistant')->value('id');
        $canManageProductVariant = DB::table('privileges')->where('name','manage product variant')->value('id');
        $canAddProductVariant = DB::table('privileges')->where('name','add product variant')->value('id');
        $canEditProductVariant = DB::table('privileges')->where('name','edit product variant')->value('id');
        DB::table('role_privilege')->insert([
            array_merge(['role_id'=>$shopAssistantRole,'privilege_id'=>$canManageProductVariant],$timestamp),
            array_merge(['role_id'=>$shopAssistantRole,'privilege_id'=>$canAddProductVariant],$timestamp),
            array_merge(['role_id'=>$shopAssistantRole,'privilege_id'=>$canEditProductVariant],$timestamp),
        ]);
    }
}
