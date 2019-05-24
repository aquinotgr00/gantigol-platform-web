<?php

use Faker\Generator as Faker;

$factory->define(Modules\Preorder\PreOrdersItems::class, function (Faker $faker) {
    return [
        'transaction_id' => \Modules\Preorder\Transaction::all()->random()->id,
        'model' => $this->faker->randomElement(['lengan panjang', 'lengan pendek']),
        'size' => $this->faker->randomElement(['s', 'm', 'l','xl']),
        'qty' => $faker->numberBetween(10, 20),
        'price' => $faker->numberBetween(10000, 20000),
        'subtotal' => $faker->numberBetween(100000, 200000)
    ];
});
