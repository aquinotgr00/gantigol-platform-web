<?php

use Faker\Generator as Faker;

$factory->define(Modules\Ecommerce\Order::class, function (Faker $faker) {
    static $number = 1;
    
    return [
        'customer_id' => \Modules\Customers\CustomerProfile::all()->random()->id,
        'invoice_id' => 'INV-'.$faker->dateTimeThisCentury->format('Y-m-d').'-'.$number++,
        'billing_name' => $faker->name,
        'billing_email' => $faker->randomElement([
            '14102065@st3telkom.ac.id',
            'firmawaneiwan@gmail.com',
            'iwanfirmawan69@gmail.com',
            'iwan.firmawan@jagokomputer.com',
        ]),
        'billing_phone' => $faker->randomElement(['+62983992','+62989992','+62983112']),
        'billing_address' => $faker->address,
        'billing_subdistrict_id' => rand(1, 5),
        'billing_zip_code' => rand(10, 20),
        'shipping_name' => $faker->randomElement(['jne','pos','tiki']),
        'shipping_phone' => $faker->randomElement(['+62983992','+62989992','+62983112']),
        'shipping_address' => $faker->address,
        'shipping_email' => $faker->randomElement([
            '14102065@st3telkom.ac.id',
            'firmawaneiwan@gmail.com',
            'iwanfirmawan69@gmail.com',
            'iwan.firmawan@jagokomputer.com',
        ]),
        'shipping_cost' => rand(10000, 200000),
        'order_status' => $faker->randomElement([0,1,2,3,4,5,6,7,8,9])
    ];
});