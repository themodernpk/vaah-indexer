<?php
return [

    /*
    |--------------------------------------------------------------------------
    | List Your Ping Services
    |--------------------------------------------------------------------------
    |
    | You can customize the list of service where you want to ping
    |
    |
    */

    'services' => [
        'http://ping.blogs.yandex.ru',
        'http://blogsearch.google.com/ping/RPC2',
        'http://api.my.yahoo.com/RPC2',
        'http://api.my.yahoo.com/rss/ping',
        'http://ping.feedburner.com',
        'http://ping.weblogs.se/',
    ],

    /*
    |--------------------------------------------------------------------------
    | List Your Services
    |--------------------------------------------------------------------------
    |
    | You can customize the list of service where you want to ping
    |
    |
    */
    'api_key' => env('VAAH_API_KEY', ''),

];
