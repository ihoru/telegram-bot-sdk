<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Bot Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the bots below you wish to use as
    | your default bot for regular use. Of course, you may use many
    | bots at once using the manager class.
    |
    */
    'default'             => 'common',

    /*
    |--------------------------------------------------------------------------
    | Telegram Bots
    |--------------------------------------------------------------------------
    |
    | Here are each of the telegram bots config.
    |
    | Supported Params:
    | - username: Your Telegram Bot's Username.
    |         Example: (string) 'BotFather'.
    |
    | - token: Your Telegram Bot's Access Token.
               Refer for more details: https://core.telegram.org/bots#botfather
    |          Example: (string) '123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11'.
    |
    */
    'bots'                => [
        'common' => [
            'username' => 'MyTelegramBot',
            'token'    => env('TELEGRAM_BOT_TOKEN', 'YOUR-BOT-TOKEN'),
        ],

//        'second' => [
//            'username'  => 'MySecondBot',
//            'token' => '123456:abc',
//        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Asynchronous Requests [Optional]
    |--------------------------------------------------------------------------
    |
    | When set to True, All the requests would be made non-blocking (Async).
    |
    | Default: false
    | Possible Values: (Boolean) "true" OR "false"
    |
    */
    'async_requests'      => env('TELEGRAM_ASYNC_REQUESTS', false),

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Handler [Optional]
    |--------------------------------------------------------------------------
    |
    | If you'd like to use a custom HTTP Client Handler.
    | Should be an instance of \Telegram\Bot\HttpClients\HttpClientInterface
    |
    | Default: GuzzlePHP
    |
    */
    'http_client_handler' => null,
];
