<?php

use Faker\Generator as Faker;
use Modules\Preorder\PreOrder;

$factory->define(Modules\Preorder\Transaction::class, function (Faker $faker) {
    static $number = 1;

    return [
        'pre_order_id' => \Modules\Preorder\PreOrder::all()->random()->id,
        'name' => $faker->name,
        'email' => $faker->randomElement([
            '14102065@st3telkom.ac.id',
            'firmawaneiwan@gmail.com',
            'iwanfirmawan69@gmail.com',
            'iwan.firmawan@jagokomputer.com',
        ]),
        'invoice' => 'INV-'.$faker->dateTimeThisCentury->format('Y-m-d').'-'.$number++,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'subdistrict_id' => rand(1, 5),
        'postal_code' => rand(10, 20),
        'quantity' => rand(10, 20),
        'pre_order_id' => PreOrder::all()->random()->id,
        'status' => $faker->randomElement(['pending','paid','shipped','rejected','returned','completed']),
        'amount' => rand(10000, 200000),
        'courier_name' => $faker->randomElement(['jne', 'tiki', 'pos']),
        'courier_type' => $faker->randomElement(['yes','regular','oke','ekonomi','kilat khusus']),
        'courier_fee' => $faker->numberBetween(20000, 50000),
        'payment_duedate' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'payment_reminder' => $faker->numberBetween(1, 3),
    ];
});
