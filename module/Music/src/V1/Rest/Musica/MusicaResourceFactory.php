<?php

namespace Music\V1\Rest\Musica;

class MusicaResourceFactory {

    public function __invoke($services) {
        $db = $services->get('DB\MySql');
        return new MusicaResource($db);
    }

}
