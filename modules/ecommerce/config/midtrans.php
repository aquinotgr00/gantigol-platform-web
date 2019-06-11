<?php

return [
    'is_production' => env('MIDTRANS_IS_PRODUCTION'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'payment' => ['status' => [
        'finish' => 'Finish',
        'pending' => 'Pending',
        'failed' => 'Failed',
        'canceled' => 'Canceled',
        'invalid' => 'Invalid'
    ]]
];