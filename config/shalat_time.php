<?php

return [
    'default_provider' => env('SHALAT_TIME_PROVIDER', 'myquran_api'),

    'providers' => [
        'myquran_api' => [
            'name' => 'MyQuran API',
            'website_url' => 'https://api.myquran.com',
            'api_base_url' => 'https://api.myquran.com/v2',
            'service_class' => \App\Services\ShalatTimes\MyQuranShalatTimeService::class,
        ],
    ],
];
