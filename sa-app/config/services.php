<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
     */

    'mailgun'   => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses'       => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe'    => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook'    => [
        'client_id'     => '1103481236394749',
        'client_secret' => '208703b4a74afebf1be42f236a5769f6',
        'redirect'      => 'http://supplyapparel.com/auth/facebook/callback',
    ],
    'twitter'    => [
        'client_id'     => 'T0dygFmg5KiqXl8GOYa5XKwBO',
        'client_secret' => 'AdmrLOF3BqpUghBSsSHUdCYfqKN6uExvuYoG135kztltFrJZGC',
        'redirect'      => 'http://supplyapparel.com/auth/twitter/callback',
    ],
    'google'    => [
        'client_id'     => '597595601992-g1iqqihgacb5dirte7tur5etg1483cpp.apps.googleusercontent.com',
        'client_secret' => 'QdYXjT3oSMZsBD-uqpDrbrYj',
        'redirect'      => 'http://supplyapparel.com/auth/google/callback',
    ],

];
