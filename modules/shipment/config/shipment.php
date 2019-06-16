<?php

return [
    'prefix' => 'shipment',
    'origin' => 6989,
    'originType' => 'sub    district',
    'services' => ['pos', 'jne', 'tiki'],
    'blacklist' => ['Paketpos Valuable Goods', 'Paketpos Dangerous Goods', 'SDS', 'HDS', 'CRG'],
    'address' => "Jln. Cepakasari no 691 Jogokaryan Mantrijeron\r\nKOTA YOGYAKARTA - MANTRIJERON\r\nDI YOGYAKARTA 55143\r\nNomor Telpon : 089672198887",
    'zip_code' => 55222,
    'end_point_api' => env('RAJAONGKIR_ENDPOINTAPI', 'https://api.rajaongkir.com/starter/'),
    'api_key' => env('RAJAONGKIR_APIKEY', '2ef837496be9d40e85999ab7f4bbf9f0'),
    'couriers' => [
        'Jalur Nugraha Ekakurir (JNE)',
        'POS Indonesia (POS)',
        'Citra Van Titipan Kilat (TIKI)',
        'Priority Cargo and Package (PCP)',
        'Eka Sari Lorena (ESL)',
        'RPX Holding (RPX)',
        'Pandu Logistics (PANDU)',
        'Wahana Prestasi Logistik (WAHANA)',
        'SiCepat Express (SICEPAT)',
        'J&T Express (J&T)',
        'Pahala Kencana Express (PAHALA)',
        'SAP Express (SAP)',
        'JET Express (JET)',
        'Solusi Ekspres (SLIS)',
        'Expedito* (EXPEDITO)',
        '21 Express (DSE)',
        'First Logistics (FIRST)',
        'Nusantara Card Semesta (NCS)',
        'Star Cargo (STAR)',
        'Lion Parcel (LION)',
        'Ninja Xpress (NINJA)',
        'IDL Cargo (IDL)',
        'Royal Express Indonesia (REX)'
    ]
];
