<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Modules\Product\Discount;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Promo 10%
        Discount::create([
            'name'=>'Diskon Persentase Januari 2018',
            'method'=>'per_product',
            'type'=>'percentage',
            'nominal'=>10,
            'start_date'=>Carbon::createFromDate(2018, 1, 1),
            'end_date'=>Carbon::createFromDate(2018, 1, 31)
        ])->discountProducts()->createMany([
            ['product_id'=>1],
            ['product_id'=>2]
        ]);
        
        // Promo 5000
        Discount::create([
            'name'=>'Diskon Amount Januari 2018',
            'method'=>'per_product',
            'type'=>'amount',
            'nominal'=>5000,
            'start_date'=>Carbon::createFromDate(2018, 1, 1),
            'end_date'=>Carbon::createFromDate(2018, 1, 31)
        ])->discountProducts()->createMany([
            ['product_id'=>3],
            ['product_id'=>4]
        ]);
        
        // Expired
        Discount::create([
            'name'=>'Diskon Amount Desember 2017',
            'method'=>'per_product',
            'type'=>'amount',
            'nominal'=>10000,
            'start_date'=>Carbon::createFromDate(2017, 12, 1),
            'end_date'=>Carbon::createFromDate(2017, 12, 31)
        ])->discountProducts()->createMany([
            ['product_id'=>1],
            ['product_id'=>2]
        ]);
    }
}
