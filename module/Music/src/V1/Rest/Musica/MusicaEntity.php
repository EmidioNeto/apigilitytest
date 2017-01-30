<?php

namespace Music\V1\Rest\Musica;

class MusicaEntity {

    private $id;
    private $id_artist;
    private $id_genre;
    private $name;
    private $year;
    private $lyrics;
    private $links;

    public function getArrayCopy() {
        return array(
            'id' => $this->id,
            'id_artist' => $this->id_artist,
            'id_genre' => $this->id_genre,
            'name' => $this->name,
            'year' => $this->year,
            'lyrics' => $this->lyrics,
            'links' => $this->links
        );
    }

    public function exchangeArray($data) {
        foreach ($data as $key => $value) {
            if (in_array($key, array('id', 'id_artist', 'id_genre', 'name', 'year', 'lyrics'))) {
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

    function getId_artist() {
        return $this->id_artist;
    }

    function getId_genre() {
        return $this->id_genre;
    }

    function getName() {
        return $this->name;
    }

    function getYear() {
        return $this->year;
    }

    function getLyrics() {
        return $this->lyrics;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_artist($id_artist) {
        $this->id_artist = $id_artist;
    }

    function setId_genre($id_genre) {
        $this->id_genre = $id_genre;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setLyrics($lyrics) {
        $this->lyrics = $lyrics;
    }

}
