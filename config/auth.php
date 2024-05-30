<?php
// config/auth.php

return [

    // 省略...

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    // 省略...

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
    ],

    // 省略...

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    // 省略...

];
