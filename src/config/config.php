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
        'http://rpc.twingly.com/',
        //'http://rpc.weblogs.com/RPC2',
        //'http://api.feedster.com/ping',
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
