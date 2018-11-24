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
        'http://www.blogdigger.com/RPC2',
        'http://rpc.twingly.com/',
        'https://rpc.bloggerei.de/ping/',
        'http://rpc.weblogs.com/RPC2',
        'http://services.newsgator.com/ngws/xmlrpcping.aspx',
        'http://ping.feedburner.com',
        'http://www.blogpeople.net/servlet/weblogUpdates',
        'http://rpc.pingomatic.com/',
        'http://rpc.twingly.com/',
        'http://rpc.weblogs.com/RPC2',
        'https://www.newsisfree.com/RPCCloud/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Your API Key
    |--------------------------------------------------------------------------
    */
    'api_key' => env('VAAH_API_KEY', ''),

];
