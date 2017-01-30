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
            'music.rest.genero' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/genero[/:genero_id][:query]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Genero\\Controller',
                    ],
                ],
            ],
            'music.rest.musica' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/musica[/:musica_id][:query]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Musica\\Controller',
                    ],
                ],
            ],
            'music.rest.artista' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/artista[/:artista_id][:query]',
                    'defaults' => [
                        'controller' => 'Music\\V1\\Rest\\Artista\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'music.rpc.status',
            4 => 'music.rest.genero',
            5 => 'music.rest.musica',
            6 => 'music.rest.artista',
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
            'Music\\V1\\Rest\\Genero\\Controller' => 'HalJson',
            'Music\\V1\\Rest\\Musica\\Controller' => 'HalJson',
            'Music\\V1\\Rest\\Artista\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Music\\V1\\Rpc\\Status\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Music\\V1\\Rest\\Genero\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Music\\V1\\Rest\\Musica\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Music\\V1\\Rest\\Artista\\Controller' => [
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
            'Music\\V1\\Rest\\Genero\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
            'Music\\V1\\Rest\\Musica\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
            'Music\\V1\\Rest\\Artista\\Controller' => [
                0 => 'application/vnd.music.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'Music\\V1\\Rpc\\Status\\Controller' => [
            'input_filter' => 'Music\\V1\\Rpc\\Status\\Validator',
        ],
        'Music\\V1\\Rest\\Genero\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Genero\\Validator',
        ],
        'Music\\V1\\Rest\\Musica\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Musica\\Validator',
        ],
        'Music\\V1\\Rest\\Artista\\Controller' => [
            'input_filter' => 'Music\\V1\\Rest\\Artista\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Music\\V1\\Rpc\\Status\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'status',
                'description' => 'Status da API, retorna verdadeiro se todos serviços estão funcionando',
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
                            'adapter' => 'DB\\MySql',
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
                            'adapter' => 'DB\\MySql',
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
        'Music\\V1\\Rest\\Genero\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'description' => 'Identificador da entidade',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
                'description' => 'Nome/Descrição do registro',
            ],
        ],
        'Music\\V1\\Rest\\Musica\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'description' => 'Identificado do registro',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'id_artist',
                'description' => 'Identificador do artista relacionado a esta música',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'description' => 'Identificador do gênero relacionado a esta música',
                'name' => 'id_genre',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
                'description' => 'Nome/Descrição do registro',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'year',
                'description' => 'Ano de lançamento da música',
            ],
            5 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'lyrics',
                'description' => 'Letra da música',
            ],
            6 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'links',
                'description' => 'Links para os relacionamentos desta entidade',
            ],
        ],
        'Music\\V1\\Rest\\Artista\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'description' => 'Identificador da entidade',
                'name' => 'id',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
                'description' => 'Nome/Descrição do registro',
            ],
        ],
    ],
    'zf-rest' => [
        'Music\\V1\\Rest\\Genero\\Controller' => [
            'listener' => \Music\V1\Rest\Genero\GeneroResource::class,
            'route_name' => 'music.rest.genero',
            'route_identifier_name' => 'genero_id',
            'collection_name' => 'genero',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'name',
                1 => 'sort',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Genero\GeneroEntity::class,
            'collection_class' => \Music\V1\Rest\Genero\GeneroCollection::class,
            'service_name' => 'Genero',
        ],
        'Music\\V1\\Rest\\Musica\\Controller' => [
            'listener' => \Music\V1\Rest\Musica\MusicaResource::class,
            'route_name' => 'music.rest.musica',
            'route_identifier_name' => 'musica_id',
            'collection_name' => 'musica',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'genero',
                1 => 'artista',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Musica\MusicaEntity::class,
            'collection_class' => \Music\V1\Rest\Musica\MusicaCollection::class,
            'service_name' => 'Musica',
        ],
        'Music\\V1\\Rest\\Artista\\Controller' => [
            'listener' => \Music\V1\Rest\Artista\ArtistaResource::class,
            'route_name' => 'music.rest.artista',
            'route_identifier_name' => 'artista_id',
            'collection_name' => 'artista',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'name',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Music\V1\Rest\Artista\ArtistaEntity::class,
            'collection_class' => \Music\V1\Rest\Artista\ArtistaCollection::class,
            'service_name' => 'Artista',
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Music\V1\Rest\Genero\GeneroEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.genero',
                'route_identifier_name' => 'genero_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Genero\GeneroCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.genero',
                'route_identifier_name' => 'genero_id',
                'is_collection' => true,
            ],
            \Music\V1\Rest\Musica\MusicaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.musica',
                'route_identifier_name' => 'musica_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Musica\MusicaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.musica',
                'route_identifier_name' => 'musica_id',
                'is_collection' => true,
            ],
            \Music\V1\Rest\Artista\ArtistaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.artista',
                'route_identifier_name' => 'artista_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Music\V1\Rest\Artista\ArtistaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'music.rest.artista',
                'route_identifier_name' => 'artista_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [],
    ],
    'service_manager' => [
        'factories' => [
            \Music\V1\Rest\Genero\GeneroResource::class => \Music\V1\Rest\Genero\GeneroResourceFactory::class,
            \Music\V1\Rest\Musica\MusicaResource::class => \Music\V1\Rest\Musica\MusicaResourceFactory::class,
            \Music\V1\Rest\Artista\ArtistaResource::class => \Music\V1\Rest\Artista\ArtistaResourceFactory::class,
        ],
    ],
];
