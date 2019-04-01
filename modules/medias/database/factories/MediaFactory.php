<?php

use Faker\Generator as Faker;
use Modules\Medias\Media;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'model_type' => 'Modules\Medias\Conten',
        'model_id' =>1,
        'collection_name'=>'media',
        'name'=>$faker->name,
        'file_name'=>$faker->name,
        'mime_type'=>'image/jpeg',
        'disk'=>'public',
        'size'=>'182512',
        'manipulations'=>'[]',
        'custom_properties'=>'[]',
        'responsive_images'=>'[]'
    ];
});
