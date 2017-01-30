<?php

namespace Music\V1\Rest\Artista;

class ArtistaEntity {

    private $id;
    private $name;
    private $links;

    public function getArrayCopy() {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'links' => $this->links
        );
    }

    public function exchangeArray($data) {
        foreach ($data as $key => $value) {
            if (in_array($key, array('id', 'name'))) {
                $this->$key = $value;
            }
        }
    }

    function getLinks() {
        return $this->links;
    }

    function setLinks($links) {
        $this->links = $links;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

}
