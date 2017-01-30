<?php
return [
    'Music\\V1\\Rpc\\Status\\Controller' => [
        'GET' => [
            'response' => '{
   "status": "Status da API, boolean"
}',
            'description' => 'Retorna verdadeiro se a API estiver funcionando',
        ],
        'description' => 'Verifica o status da API',
    ],
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
];
