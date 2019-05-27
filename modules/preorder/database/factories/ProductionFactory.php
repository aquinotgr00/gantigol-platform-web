<?php

use Faker\Generator as Faker;

use Modules\Preorder\Transaction;
use Modules\Preorder\ProductionBatch;
use Modules\Preorder\Production;

$factory->define(Production::class, function (Faker $faker) {

    return [
        'transaction_id' => Transaction::all()->random()->id,
        'production_batch_id' => ProductionBatch::all()->random()->id,
        'delivery_date' =>  $faker->dateTimeThisCentury->format('Y-m-d'),
        'tracking_number' => rand(20, 80),
        'received_confirmation' => $faker->dateTime()
    ];
});
