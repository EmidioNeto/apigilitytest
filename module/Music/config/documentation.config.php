<?php
return [
    'Music\\V1\\Rest\\Genero\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/genero"
       },
       "first": {
           "href": "/genero?page={page}"
       },
       "prev": {
           "href": "/genero?page={page}"
       },
       "next": {
           "href": "/genero?page={page}"
       },
       "last": {
           "href": "/genero?page={page}"
       }
   }
   "_embedded": {
       "genero": [
           {
               "_links": {
                   "self": {
                       "href": "/genero[/:genero_id]"
                   }
               }
              "id": "Identificador da entidade",
              "name": "Nome/Descrição do registro"
           }
       ]
   }
}',
            ],
            'description' => 'Retorna os gêneros musicais',
        ],
        'description' => 'Retorna os gêneros musicais',
        'entity' => [
            'description' => 'Retorna um gênero musical',
            'GET' => [
                'description' => 'Retorna um gênero musical',
                'response' => '{
   "_links": {
       "self": {
           "href": "/genero[/:genero_id]"
       }
   }
   "id": "Identificador da entidade",
   "name": "Nome/Descrição do registro"
}',
            ],
        ],
    ],
    'Music\\V1\\Rest\\Musica\\Controller' => [
        'description' => 'Retorna as musicas',
        'collection' => [
            'description' => 'Retorna uma coleção paginada de musicas',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/musica[/:musica_id]"
       },
       "first": {
           "href": "/musica[/:musica_id]?page={page}"
       },
       "prev": {
           "href": "/musica[/:musica_id]?page={page}"
       },
       "next": {
           "href": "/musica[/:musica_id]?page={page}"
       },
       "last": {
           "href": "/musica[/:musica_id]?page={page}"
       }
   }
   "_embedded": {
       "musica": [
           {
               "_links": {
                   "self": {
                       "href": "/musica[/:musica_id][:query]"
                   }
               }
              "id": "Identificado do registro",
              "id_artist": "Identificador do artista relacionado a esta música",
              "id_genre": "Identificador do gênero relacionado a esta música",
              "name": "Nome/Descrição do registro",
              "year": "Ano de lançamento da música",
              "lyrics": "Letra da música",
              "links": "Links para os relacionamentos desta entidade"
           }
       ]
   }
}',
                'description' => 'Retorna uma coleção paginada de musicas',
            ],
        ],
        'entity' => [
            'description' => 'Retorna uma musica',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/musica[/:musica_id][:query]"
       }
   }
   "id": "Identificado do registro",
   "id_artist": "Identificador do artista relacionado a esta música",
   "id_genre": "Identificador do gênero relacionado a esta música",
   "name": "Nome/Descrição do registro",
   "year": "Ano de lançamento da música",
   "lyrics": "Letra da música",
   "links": "Links para os relacionamentos desta entidade"
}',
                'description' => 'Retorna uma musica',
            ],
        ],
    ],
    'Music\\V1\\Rpc\\Status\\Controller' => [
        'GET' => [
            'response' => '{
   "status": "Status da API, retorna verdadeiro se todos serviços estão funcionando"
}',
            'description' => 'Retorna verdadeiro se a API estiver funcionando',
        ],
        'description' => 'Verifica o status da API',
    ],
    'Music\\V1\\Rest\\Artista\\Controller' => [
        'collection' => [
            'GET' => [
                'description' => 'Retorna uma coleção paginada de artistas',
                'response' => '{
   "_links": {
       "self": {
           "href": "/artista[/:artista_id]"
       },
       "first": {
           "href": "/artista[/:artista_id]?page={page}"
       },
       "prev": {
           "href": "/artista[/:artista_id]?page={page}"
       },
       "next": {
           "href": "/artista[/:artista_id]?page={page}"
       },
       "last": {
           "href": "/artista[/:artista_id]?page={page}"
       }
   }
   "_embedded": {
       "artista": [
           {
               "_links": {
                   "self": {
                       "href": "/artista[/:artista_id][:query]"
                   }
               }
              "id": "Identificador da entidade",
              "name": "Nome/Descrição do registro"
           }
       ]
   }
}',
            ],
            'description' => 'Retorna uma coleção paginada de artistas',
        ],
        'entity' => [
            'description' => 'Retorna uma musica',
            'GET' => [
                'description' => 'Retorna uma musica',
                'response' => '{
   "_links": {
       "self": {
           "href": "/artista[/:artista_id][:query]"
       }
   }
   "id": "Identificador da entidade",
   "name": "Nome/Descrição do registro"
}',
            ],
        ],
    ],
];
