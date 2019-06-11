<?php
namespace Modules\Product\Seeders;

use Illuminate\Database\Seeder;
use Modules\Product\Seeders\ProductSizesTableSeeder;
use Modules\Product\Seeders\ProductsTableSeeder;
use DB;

class ModuleProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->truncate();
        $this->call(ProductSizesTableSeeder::class);
        DB::table('products')->truncate();
        $this->call(ProductsTableSeeder::class);
        DB::table('product_variants')->truncate();
        $this->call(ProductVariantsTableSeeder::class);
    }
}
