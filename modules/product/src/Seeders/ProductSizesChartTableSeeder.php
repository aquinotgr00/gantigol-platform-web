<?php

namespace Modules\Product\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSizesChartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size_charts')->truncate();
        factory(\Modules\Product\ProductSizeChart::class, 5)->create();  
    }
}
