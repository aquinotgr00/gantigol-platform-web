<?php

return [
    /**
     * Adjustment type
     */
    'adjustment' => [
        'type' => [
            'InventoryAdjustment'=>0,
            'StockTake'=>1,
            'ProductReturn'=>2,
            'InvoiceExpired'=>3
        ]
    ],
    'prefix' => 'ecommerce',
     /**
     * Error messages
     */
    'error' => [
        'prism' => [
            'AdminNotFound' => ['message'=>"Unable to find admin email : ",'statusCode'=>501],
            'ProductNotFound' => ['message'=>"Unable to find product : ",'statusCode'=>502],
            'UnregisteredCustomer' => ['message'=>"Unable to find customer email : ",'statusCode'=>503]
        ]
    ],
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
    'shipment' => [
        'origin' => 6989,
        'originType' => 'subdistrict',
        'services' => ['pos','jne','tiki','jet'],
        'blacklist' => ['Paket pos Valuable Goods', 'Paket pos Dangerous Goods', 'SDS', 'HDS', 'CRG'], 
        'address' => "Jln. Cepakasari no 691 Jogokaryan Mantrijeron\r\nKOTA YOGYAKARTA - MANTRIJERON\r\nDI YOGYAKARTA 55143\r\nNomor Telpon : 089672198887", 
        'zip_code' => 55222
    ],
    'review' => [
        'Pending' => 0,
        'Accepted' => 1
    ],
    /**
     * Payment Options
     */
    'paymentOptions'=> [
        ['type'=>'CREDIT_CARD','label'=>'Credit card','feePercentage'=>0.04,'feeNominal'=>2000,'enabled'=>false],
        ['type'=>'BANK_TRANSFER_BCA','label'=>'Virtual Account BCA','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INTERNET_BANKING_BCA_KLIKPAY','label'=>'BCA KlikPay','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INTERNET_BANKING_KLIKBCA','label'=>'KlikBCA','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'BANK_TRANSFER_MANDIRI','label'=>'Transfer Bank Mandiri','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INTERNET_BANKING_MANDIRI_CLICKPAY','label'=>'Mandiri ClickPay','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'BANK_TRANSFER_BNI','label'=>'Transfer Bank BNI','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INDOMARET','label'=>'Indomaret','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'TELKOMSEL_CASH','label'=>'Telkomsel TCASH','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INDOSAT_DOMPETKU','label'=>'Indosat PayPro','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INTERNET_BANKING_EPAY_BRI','label'=>'BRI E-Pay','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true],
        ['type'=>'INTERNET_BANKING_CIMB_CLICKS','label'=>'CIMB Clicks','feePercentage'=>0,'feeNominal'=>2000,'enabled'=>true]
    ],
    /**
     * allow surcharge?
     * https://www.cnnindonesia.com/ekonomi/20170908142752-78-240387/kena-cas-transaksi-kartu-kredit-nasabah-diminta-lapor
     */
    'allowSurcharge'=>false,
    
    /**
     * minimum app version
     */
    'minAppVersion'=>[
        'ios'=>'',
        'android'=>''
    ],
    
    /**
     * payment transfer BCA (manual verification)
     */
    'transferBca'=>[
        'time'=>date('H:i',mktime(8,0)),
        'expired'=>[
            'amount'=>(env('APP_ENV')=='production')?1440:4,
            'unit'=>'minutes'
        ]
    ]
];
