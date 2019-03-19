<?php

namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Modules\Admin\Seeders\UserPrivilegeCategoriesTableSeeder;

class UserForPrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
        DB::table('privilege_categories')->insert([
            array_merge(['name'=>'User'],$timestamp),
            array_merge(['name'=>'Product Variant'],$timestamp),
        ]);
        
        $category = DB::table('privilege_categories')->where('name','user')->value('id');
        
        DB::table('privileges')->insert([
            array_merge(['name'=>'View users','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Add user','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Edit user','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Enable/Disable user','privilege_category_id'=>$category],$timestamp),
        ]);
        
        $category = DB::table('privilege_categories')->where('name','product variant')->value('id');
        
        DB::table('privileges')->insert([
            array_merge(['name'=>'Manage product variant','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Add product variant','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Edit product variant','privilege_category_id'=>$category],$timestamp),
            array_merge(['name'=>'Delete product variant','privilege_category_id'=>$category],$timestamp),
        ]);
    }
}
