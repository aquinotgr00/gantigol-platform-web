<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Product\ProductSizeChart::class, function (Faker $faker) {

    return [
        'category_id' => \Modules\ProductCategory\ProductCategory::all()->unique()->random()->id,
        'name' => $faker->name,
    ];
});
