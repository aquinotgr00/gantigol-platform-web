<?php

namespace Modules\Ecommerce\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EcommerceForPrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a category
        DB::table('privilege_categories')->insert(['name' => 'Order Management']);
        // get the id of the category you've just created
        $EcommercePrivilegeCategoryId = DB::table('privilege_categories')->where('name', 'Order Management')->value('id');
        DB::table('privileges')->insert([
            ['name' => 'view paid order', 'privilege_category_id' => $EcommercePrivilegeCategoryId],
            ['name' => 'view order transaction', 'privilege_category_id' => $EcommercePrivilegeCategoryId],
            ['name' => 'edit order customer', 'privilege_category_id' => $EcommercePrivilegeCategoryId],
            ['name' => 'edit order shipping info', 'privilege_category_id' => $EcommercePrivilegeCategoryId],
            ['name' => 'edit order shipping details', 'privilege_category_id' => $EcommercePrivilegeCategoryId],
        ]);
    }
}
