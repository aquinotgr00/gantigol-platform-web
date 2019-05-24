<?php

use Faker\Generator as Faker;

$factory->define(Modules\Customers\CustomerProfile::class, function (Faker $faker) {
    $registrationDate = $faker->dateTimeThisMonth();
    
    return [
        'phone'=>$faker->e164PhoneNumber,
        'gender'=>$faker->randomElement(['m','f']),
        'address'=>$faker->address,
        'birthdate'=>$faker->dateTimeInInterval('-30 years','+20 years'),
        'last_login'=>$faker->dateTimeThisMonth(),
        'user_id'=>function() use($registrationDate) {
            return factory(App\User::class)->create([
                'created_at'=>$registrationDate,
                'updated_at'=>$registrationDate
            ])->id;
        },
        'created_at'=>$registrationDate,
        'updated_at'=>$registrationDate
    ];
});
