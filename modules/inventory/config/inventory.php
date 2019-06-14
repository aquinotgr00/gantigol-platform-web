<?php

return [
    'sidebar' => [
        'order' => 2,
        'view' => 'inventory::includes.sidebar'
    ],
    'adjustment' => [
        'type' => [
            'InventoryAdjustment'=>0,
            'StockTake'=>1,
            'ProductReturn'=>2,
            'InvoiceExpired'=>3
        ]
    ],
];