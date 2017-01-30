<?php
namespace Music\V1\Rest\Genero;

class GeneroResourceFactory
{
    public function __invoke($services)
    {
        $db = $services->get('DB\MySql');
        return new GeneroResource($db);
    }
}
