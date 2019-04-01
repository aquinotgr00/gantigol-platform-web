<?php

return [
    'guards' => [
            'api' => [
                'driver' => 'passport',
                'provider' => 'members',
            ],
        ],
    'providers' => [
        'members' => [
            'driver' => 'eloquent',
            'model' => Modules\Membership\Member::class,
        ],
    ],
    'passwords' => [
        'members' => [
            'provider' => 'members',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

    ];
