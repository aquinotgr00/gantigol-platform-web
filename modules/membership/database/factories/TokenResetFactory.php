<?php

use Faker\Generator as Faker;
use Modules\Membership\PasswordReset;
use Carbon\Carbon;

$factory->define(PasswordReset::class, function (Faker $faker) {
    return [
            "email"=>"test@email.com",
            'token'=>sha1(Carbon::now()->timestamp),
    ];
});
