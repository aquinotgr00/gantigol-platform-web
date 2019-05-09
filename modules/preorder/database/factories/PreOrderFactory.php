<?php

use Faker\Generator as Faker;

$factory->define(Modules\Preorder\PreOrder::class, function (Faker $faker) {
    return [
        'product_id' => \Modules\Product\Product::all()->unique()->random()->id,
        'quota' => $faker->numberBetween(10, 20),
        'status' => $faker->randomElement(['publish','draft','closed']),
        'start_date' => date('Y-m-d'),
        'end_date' => $faker->dateTimeThisYear('2019-05-30 21:00:00'),
        'total' => 0,
    ];
});
