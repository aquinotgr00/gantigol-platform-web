<?php

use Faker\Generator as Faker;
use Modules\Medias\Content;

$factory->define(Content::class, function (Faker $faker) {
    return [
        'title' => $faker->title
    ];
});
