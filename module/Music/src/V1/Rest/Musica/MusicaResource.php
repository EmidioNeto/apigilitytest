<?php

namespace Music\V1\Rest\Musica;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Zend\Db\TableGateway\TableGateway,
    Zend\Db\ResultSet\ResultSet,
    Zend\Db\Sql\Where,
    Zend\Paginator\Adapter\DbTableGateway,
    Zend\Paginator\Adapter\DbSelect,
    Zend\Db\Sql\Sql;

class MusicaResource extends AbstractResourceListener {

    /**
     * @var \Zend\Db\Adapter\Adapter
     */
    private $db;

    /**
     * @var TableGateway
     */
    private $tableGateway;

    public function __construct($db) {
        $this->db = $db;
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new MusicaEntity());
        $this->tableGateway = new TableGateway('song', $db, null, $resultSet);
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data) {
        return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id) {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data) {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id) {
        $result = $this
                ->tableGateway
                ->select(
                        array(
                            'id' => $id
                        )
                )
                ->current();
        if ($result) {
            $links = new \ZF\Hal\Link\LinkCollection();

            $link = new \ZF\Hal\Link\Link('genero');
            $params = ['genero_id' => $result->getId_genre()];
            $link->setRoute('music.rest.genero', $params);
            $links->add($link);


            $link = new \ZF\Hal\Link\Link('artista');
            $params = ['artista_id' => $result->getId_artist()];
            $link->setRoute('music.rest.artista', $params);
            $links->add($link);

            $result->setLinks($links);
        }
        return $result;
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = []) {
        $sql = new Sql($this->tableGateway->adapter);
        $select = $sql->select();
        $select->from($this->tableGateway->getTable());
        $select->join('artist', 'artist.id = id_artist', array("artist" => "name"));
        $select->join('genre', 'genre.id = id_genre', array("genre" => "name"));

        if (isset($params['name']) && $params['name'] != '') {
            $where = new Where();
            $where->like("song.name", '%' . $params['name'] . '%');
            $select->where($where);
        }

        if (isset($params['artista']) && $params['artista'] != '') {
            $where = new Where();
            $where->like("artist.name", '%' . $params['artista'] . '%');
            $select->where($where);
        }

        if (isset($params['genero']) && $params['genero'] != '') {
            $where = new Where();
            $where->like("genre.name", '%' . $params['genero'] . '%');
            $select->where($where);
        }

        $dbTableGatewayAdapter = new DbSelect($select, $sql);
        return new MusicaCollection($dbTableGatewayAdapter);
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data) {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data) {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data) {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data) {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }

}
