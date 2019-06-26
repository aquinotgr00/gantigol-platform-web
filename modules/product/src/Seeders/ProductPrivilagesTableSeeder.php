<?php

namespace Modules\Product\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPrivilagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a category
        DB::table('privilege_categories')->insert(['name'=>'Product Management']);
        // get the id of the category you've just created
        $productPrivilegeCategoryId = DB::table('privilege_categories')->where('name', 'Product Management')->value('id');
        
        DB::table('privileges')->insert([
            ['name'=>'create product', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'view product', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'edit product', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'view variant', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'create variant', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'edit variant', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'view product category', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'create product category', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'edit product category', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'view size chart', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'create size chart', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'edit size chart', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'set visible', 'privilege_category_id'=>$productPrivilegeCategoryId],
            ['name'=>'set adjustment', 'privilege_category_id'=>$productPrivilegeCategoryId],
        ]);
    }
}
