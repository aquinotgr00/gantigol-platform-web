<?php

use Faker\Generator as Faker;

$factory->define(\Modules\ProductManagement\ProductVariant::class, function (Faker $faker) {
    $product = factory('\Modules\ProductManagement\Product')->create();
    $sizes = \Modules\ProductManagement\ProductSize::where('id', $product->size_id)->first();
    $sizes = $sizes->codes;

    $initBalance = $faker->numberBetween(1, 10);

    return [
        'product_id' => $product->id,
        'size_code' => $sizes[rand(0,count($sizes)-1)],
        'sku' => $faker->shuffle('abcdefghijklmnopqrstuvwxyz'),
        'initial_balance' => $initBalance,
        'safety_stock' => $faker->numberBetween(0,10),
        'quantity_on_hand' => $initBalance
    ];
});
