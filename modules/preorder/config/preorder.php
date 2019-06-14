<?php

return [
    'sidebar' => [
        'order' => 2,
        'view' => 'preorder::includes.sidebar'
    ],
    'courier'=>[
        [
            'id'=>'jne',
            'name'=>'Jalur Nugraha Ekakurir (JNE)',
        ],
        [
            'id'=>'pos',
            'name'=>'POS Indonesia (POS)',
        ],
        [
            'id'=>'',
            'name'=>'Citra Van Titipan Kilat (TIKI)',
        ],
        [
            'id'=>'wahana',
            'name'=>'Wahana Prestasi Logistik (WAHANA)',
        ],
        [
            'id'=>'jnt',
            'name'=>'J&T Express (J&T)',
        ],
        [
            'id'=>'sicepat',
            'name'=>'SiCepat Express',
        ],
        [
            'id'=>'pahala',
            'name'=>'Pahala Kencana Express (PAHALA)',
        ],
        [
            'id'=>'ninja',
            'name'=>'Ninja Xpress (NINJA)',
        ]
    ],
    'Reminder'=>[
        'time'=>date('H:i',mktime(8,0)),
        'expired'=>[
            'amount'=>(env('APP_ENV')=='production')?1440:4,
            'unit'=>'minutes'
        ]
    ]
];
