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
            'music.rest.genre' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/genre[/:genre_id]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Genre\\Controller',
                    ],
                ],
            ],
            'music.rest.artist' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/artist[/:artist_id]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Artist\\Controller',
                    ],
                ],
            ],
            'music.rest.song' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/song[/:song_id]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Song\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'music.rpc.status',
            1 => 'music.rest.genre',
            2 => 'music.rest.artist',
            3 => 'music.rest.song',
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
            'Music\\V1\\Rest\\Genre\\Controller' => 'HalJson',
            'Music\\V1\\Rest\\Artist\\Controller' => 'HalJson',
            'Music\\V1\\Rest\\Song\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Music\\V1\\Rpc\\Status\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Music\\V1\\Rest\\Genre\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Music\\V1\\Rest\\Artist\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Music\\V1\\Rest\\Song\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Music\\V1\\Rpc\\Status\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
            'Music\\V1\\Rest\\Genre\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
            'Music\\V1\\Rest\\Artist\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
            'Music\\V1\\Rest\\Song\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'Music\\V1\\Rpc\\Status\\Controller' => [
            'input_filter' => 'Music\\V1\\Rpc\\Status\\Validator',
        ],
        'Music\\V1\\Rest\\Genre\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Genre\\Validator',
        ],
        'Music\\V1\\Rest\\Artist\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Artist\\Validator',
        ],
        'Music\\V1\\Rest\\Song\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Song\\Validator',
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
        'Music\\V1\\Rest\\Genre\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
        'Music\\V1\\Rest\\Artist\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
        'Music\\V1\\Rest\\Song\\Validator' => [
            0 => [
                'name' => 'id_artist',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'mysql',
                            'table' => 'artist',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'id_genre',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'mysql',
                            'table' => 'genre',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'year',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            4 => [
                'name' => 'lyrics',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'zf-rest' => [
        'Music\\V1\\Rest\\Genre\\Controller' => [
            'listener' => 'Music\\V1\\Rest\\Genre\\GenreResource',
            'route_name' => 'music.rest.genre',
            'route_identifier_name' => 'genre_id',
            'collection_name' => 'genre',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Genre\GenreEntity::class,
            'collection_class' => \Music\V1\Rest\Genre\GenreCollection::class,
            'service_name' => 'genre',
        ],
        'Music\\V1\\Rest\\Artist\\Controller' => [
            'listener' => 'Music\\V1\\Rest\\Artist\\ArtistResource',
            'route_name' => 'music.rest.artist',
            'route_identifier_name' => 'artist_id',
            'collection_name' => 'artist',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Artist\ArtistEntity::class,
            'collection_class' => \Music\V1\Rest\Artist\ArtistCollection::class,
            'service_name' => 'artist',
        ],
        'Music\\V1\\Rest\\Song\\Controller' => [
            'listener' => 'Music\\V1\\Rest\\Song\\SongResource',
            'route_name' => 'music.rest.song',
            'route_identifier_name' => 'song_id',
            'collection_name' => 'song',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Song\SongEntity::class,
            'collection_class' => \Music\V1\Rest\Song\SongCollection::class,
            'service_name' => 'song',
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Music\V1\Rest\Genre\GenreEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.genre',
                'route_identifier_name' => 'genre_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Genre\GenreCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.genre',
                'route_identifier_name' => 'genre_id',
                'is_collection' => true,
            ],
            \Music\V1\Rest\Artist\ArtistEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.artist',
                'route_identifier_name' => 'artist_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Artist\ArtistCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.artist',
                'route_identifier_name' => 'artist_id',
                'is_collection' => true,
            ],
            \Music\V1\Rest\Song\SongEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.song',
                'route_identifier_name' => 'song_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Song\SongCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.song',
                'route_identifier_name' => 'song_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'Music\\V1\\Rest\\Genre\\GenreResource' => [
                'adapter_name' => 'mysql',
                'table_name' => 'genre',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Music\\V1\\Rest\\Genre\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Music\\V1\\Rest\\Artist\\ArtistResource' => [
                'adapter_name' => 'mysql',
                'table_name' => 'artist',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Music\\V1\\Rest\\Artist\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'Music\\V1\\Rest\\Song\\SongResource' => [
                'adapter_name' => 'mysql',
                'table_name' => 'song',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Music\\V1\\Rest\\Song\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
];
