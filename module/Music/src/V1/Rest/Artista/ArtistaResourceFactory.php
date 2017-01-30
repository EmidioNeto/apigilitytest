<?php

namespace Music\V1\Rest\Artista;

class ArtistaResourceFactory {

    public function __invoke($services) {
        $db = $services->get('DB\MySql');
        return new ArtistaResource($db);
    }

}
