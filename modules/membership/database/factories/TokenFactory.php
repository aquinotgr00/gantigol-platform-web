<?php

use Faker\Generator as Faker;
use Modules\Membership\AccessToken;
use Carbon\Carbon;

$factory->define(AccessToken::class, function (Faker $faker) {
    return [
            "member_id"=>1,
            'token'=>sha1(Carbon::now()->timestamp),
            'expired_at'=>Carbon::now()->addWeeks(1)->toDateTimeString()
    ];
});
