<?php
return [
    'controllers' => [
        'factories' => [
            'Music\\V1\\Rpc\\Status\\Controller' => \Music\V1\Rpc\Status\StatusControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'music.rpc.status' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/status',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rpc\\Status\\Controller',
                        'action' => 'status',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'music.rpc.status',
        ],
    ],
    'zf-rpc' => [
        'Music\\V1\\Rpc\\Status\\Controller' => [
            'service_name' => 'Status',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'music.rpc.status',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Music\\V1\\Rpc\\Status\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Music\\V1\\Rpc\\Status\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Music\\V1\\Rpc\\Status\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'Music\\V1\\Rpc\\Status\\Controller' => [
            'input_filter' => 'Music\\V1\\Rpc\\Status\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Music\\V1\\Rpc\\Status\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'status',
                'description' => 'Status da API, boolean',
            ],
        ],
    ],
];
