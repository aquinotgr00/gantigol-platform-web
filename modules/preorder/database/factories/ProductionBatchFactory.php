<?php

use Faker\Generator as Faker;
use Modules\Preorder\ProductionBatch;

$factory->define(ProductionBatch::class, function (Faker $faker) {
    return [
        'pre_order_id'=> \Modules\Preorder::all()->random()->id,
        'status' => $faker->randomElement(['pending','wip','done','delivered','received','archived']),
        'batch_name' => $faker->ean8,
        'batch_qty' => $faker->randomDigitNotNull,
        'start_production_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'end_production_date' => $faker->dateTimeInInterval('now', '+7 days') ,
        'notes' => $faker->word
    ];
});
