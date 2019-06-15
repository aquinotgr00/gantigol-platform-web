<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Customers\CustomerProfile::class, function (Faker $faker) {
    $registrationDate = $faker->dateTimeThisMonth();
    
    return [
        'name'=>$faker->name,
        'phone'=> $faker->randomElement(['+62983992','+62989992','+62983112']),
        'gender'=> $faker->randomElement(['m','f']),
        'address'=>$faker->address,
        'birthdate'=>$faker->dateTimeInInterval('-30 years', '+20 years'),
        'last_login'=>$faker->dateTimeThisMonth(),
        'user_id'=> $faker->randomElement([1,2,3]),
        'created_at'=>$registrationDate,
        'updated_at'=>$registrationDate
    ];
});
