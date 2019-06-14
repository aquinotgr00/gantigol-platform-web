<?php
namespace Modules\ProductCategory\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->truncate();
        $product_categories = factory(\Modules\ProductCategory\ProductCategory::class, 10)->create();
    }
}
