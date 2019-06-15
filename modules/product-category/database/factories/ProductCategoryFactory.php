<?php

use Faker\Generator as Faker;

$factory->define(\Modules\ProductCategory\ProductCategory::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'image_id'=>null,
        'parent_id'=>null
    ];
});
