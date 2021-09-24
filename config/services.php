<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyDDJOaJdIfZnHyZmFyDawBST1o7lojjcGs', // Only used from JS integration
        'authDomain'=> 'moim-id-dev.firebaseapp.com',
        'projectId'=> "moim-id-dev",
        'database_url' => 'https://database_url.com/',
        'storageBucket'=> "moim-id-dev.appspot.com",
        'messagingSenderId'=> "490386995630",
        'appId'=> "1:490386995630:web:deaee374674bb29a8c703f"
    ],
];
