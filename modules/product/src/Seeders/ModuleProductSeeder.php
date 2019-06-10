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
        $this->call(ProductSizesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
