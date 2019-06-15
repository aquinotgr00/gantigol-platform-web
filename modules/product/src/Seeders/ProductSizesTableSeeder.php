<?php

namespace Modules\Product\Seeders;

use Illuminate\Database\Seeder;
use Modules\Product\ProductSize;

class ProductSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create([
            'name' => 'Tops', 
            'codes' => 'S,M,L,XL'
        ]);
        ProductSize::create([
            'name' => 'Bottoms', 
            'codes' => '29,30,32,34'
        ]);
        ProductSize::create([
            'name' => 'All Size', 
            'codes' => 'ALL SIZE'
        ]);
    }
}
