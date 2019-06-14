<?php

use Faker\Generator as Faker;

$factory->define(Modules\Ecommerce\OrderItem::class, function (Faker $faker) {
    static $number = 1;
    
    return [
        'order_id' => \Modules\Ecommerce\Order::all()->random()->id,
        'productvariant_id' => \Modules\Product\ProductVariant::all()->random()->id,
        'qty' => rand(1, 5),
        'price' => rand(10000, 200000)
    ];
});