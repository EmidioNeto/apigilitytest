<?php

namespace Music\V1\Rest\Artista;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Zend\Db\TableGateway\TableGateway,
    Zend\Db\ResultSet\ResultSet,
    Zend\Db\Sql\Where,
    Zend\Paginator\Adapter\DbTableGateway;
use Music\V1\Rest\Artista\ArtistaEntity;

class ArtistaResource extends AbstractResourceListener {

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
        $resultSet->setArrayObjectPrototype(new ArtistaEntity());
        $this->tableGateway = new TableGateway('artist', $db, null, $resultSet);
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
        $links = new \ZF\Hal\Link\LinkCollection();
        $link = new \ZF\Hal\Link\Link('musicas');
        $params = ['query' => '?artista='.$result->getName()];
        $link->setRoute('music.rest.musica', $params);
        $links->add($link);
        $result->setLinks($links);
        return $result;
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = []) {
        $where = new Where();

        if (isset($params['name']) && $params['name'] != '') {
            $likeSpec = new Where();
            $likeSpec->like('name', '%' . $params['name'] . '%');
            $where->addPredicate($likeSpec);
        }
        $sort = null;

        if (in_array($params['sort'], array_keys((new ArtistaEntity())->getArrayCopy()))) {
            $sort = $params['sort'];
        }
        $dbTableGatewayAdapter = new DbTableGateway($this->tableGateway, $where, $sort);

        return new ArtistaCollection($dbTableGatewayAdapter);
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
