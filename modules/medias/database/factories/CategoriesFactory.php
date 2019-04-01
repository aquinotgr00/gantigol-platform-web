<?php

use Faker\Generator as Faker;
use Modules\Medias\MediaCategories;

$factory->define(MediaCategories::class, function (Faker $faker) {
    return [
        'title' => $faker->title
    ];
});
