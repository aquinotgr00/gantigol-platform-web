<?php

namespace Modules\Preorder\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Modules\Admin\Seeders\UserPrivilegeCategoriesTableSeeder;

class PreOrderPrivilagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a category
        DB::table('privilege_categories')->insert(['name'=>'Preorder']);
        // get the id of the category you've just created
        $preOrderPrivilegeCategoryId = DB::table('privilege_categories')->where('name','Preorder')->value('id');
        
        DB::table('privileges')->insert([
	        ['name'=>'create preorder', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
	        ['name'=>'view preorder', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
	        ['name'=>'edit preorder', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
            ['name'=>'view transaction', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
            ['name'=>'create batch', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
            ['name'=>'view batch', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
            ['name'=>'edit shipping', 'privilege_category_id'=>$preOrderPrivilegeCategoryId],
            ['name'=>'send reminder', 'privilege_category_id'=>$preOrderPrivilegeCategoryId]
        ]);
    }
}
