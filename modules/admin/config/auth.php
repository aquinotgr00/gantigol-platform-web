<?php

return [
    'providers'=>[
        'admins' => [
            'driver' => 'eloquent',
            'model'  => Modules\Admin\Admin::class
        ]
    ],
    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ]
    ],
    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60
        ]
    ]
];
