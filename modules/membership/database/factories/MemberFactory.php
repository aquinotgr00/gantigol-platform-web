<?php

use Faker\Generator as Faker;
use Modules\Membership\Member;

$factory->define(Member::class, function (Faker $faker) {
    return [
       			"name"=> "test postman",
				"username"=> "postman",
				"email"=> "test@postman.com",
				"phone"=> "+2298929992",
				"dob"=> "27/01/1991",
				"gender"=>"male",
				"address"=> "yogyakarta",
				"province"=>"yogyakarta",
				"city"=>"Yogyakarta",
				"subdistrict"=>"yogyakarta",
				"postal_code"=>"yogyakarta",
				"verification"=>"verified",
				"password"=> bcrypt("open1234")
    ];
});

