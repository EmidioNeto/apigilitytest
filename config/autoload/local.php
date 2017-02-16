<?php
return [
    'db' => [
        'adapters' => [
            'DB\\MySql' => [
                'database' => 'service',
                'driver' => \Mysqli::class,
                'username' => 'root',
                'port' => '3306',
                'dsn' => 'localhost',
            ],
            'TESS' => [
                'database' => 'service',
                'driver' => 'PDO_Mysql',
                'username' => 'root',
                'dsn' => 'localhost',
            ],
        ],
    ],
];
