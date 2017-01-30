<?php
return [
    'db' => [
        'adapters' => [
            'DB\MySql' => [
                'database' => 'teste',
                'driver' => \Mysqli::class,
                'username' => 'root',
                'port' => '3306',
                'dsn' => 'localhost',
            ],
        ],
    ],
];
