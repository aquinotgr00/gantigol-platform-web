<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Product\Product::class, function (Faker $faker) {
    static $image = 0;
    return [
        'name' => $faker->word,
        'description'=>$faker->sentences(5,true),
        'image' => 'images/products/TZUG9Qr7QgCpBRwoiDGGmZG8bF2r6rl4NmPTGMEC.jpeg',
        'category_id' => \Modules\ProductCategory\ProductCategory::pluck("id")->random(),
        'price'=> round($faker->numberBetween(10000,150000),-4),
        'weight'=> round($faker->numberBetween(100,1000),-2),
        'size_id' => \Modules\Product\ProductSize::pluck("id")->random(),
    ];
});
