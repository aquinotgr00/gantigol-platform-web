<?php

return [
    'prefix' => 'ecommerce',
    /**
     * Image sizes
     */
    'image' => [
        ['size' => 'thumb', 'width' => 75, 'height' => 100],
        ['size' => 'small', 'width' => 320, 'height' => 200],
        ['size' => 'medium', 'width' => 640, 'height' => 480],
        ['size' => 'large', 'width' => 1280, 'height' => 720],
    ],
    /**
     * Order status
     */
    'order' => [
        'method' => ['Website', 'Prism', 'Apps'],
        'status' => [
            'Pending' => 0,
            'Paid' => 1,
            'Rejected' => 2,
            'Shipped' => 3,
            'Returned' => 4,
            'Completed' => 5,
            'UserCancellation' => 6,
            'Expired' => 7,
            'VerifyPayment' => 8,
            'Refund' => 9,
        ],
        'label' => ['default', 'primary', 'danger', 'success', 'warning', 'success', 'default', 'default', 'default', 'default'],
        'desc' => [
            'Waiting for payment',
            'Ready to send to customer',
            'Rejected order',
            'Sent to courier',
            'Product returned to store',
            'Delivered to customer',
        ],
    ],
];
