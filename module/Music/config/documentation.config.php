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
];
