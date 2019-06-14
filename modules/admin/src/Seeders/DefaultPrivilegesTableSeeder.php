<?php

namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultPrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('privilege_categories')->insert(['name'=>'default']);

        $defaultPrivilegeCategoryId = DB::table('privilege_categories')->where('name', 'default')->value('id');
        
        DB::table('privileges')->insert([
            ['name'=>'product management', 'privilege_category_id'=>$defaultPrivilegeCategoryId],
            ['name'=>'order management', 'privilege_category_id'=>$defaultPrivilegeCategoryId],
            ['name'=>'preorder management', 'privilege_category_id'=>$defaultPrivilegeCategoryId],
            ['name'=>'content management', 'privilege_category_id'=>$defaultPrivilegeCategoryId],
            ['name'=>'promo management', 'privilege_category_id'=>$defaultPrivilegeCategoryId]
        ]);
    }
}
