<?php
require_once( __DIR__ . '/../repositories/routerepository.php');

class RouteService {
    private $repository;
    function __construct() {
        $this->repository = new RouteRepository();
    }
    public function getAll() {
        $routes = $this->repository->getAll();
        return $routes;
    }

    public function insertRoute($newRowId, $title, $description, $author, $posted_at) {
        return $this->repository->insertRoute($newRowId, $title, $description, $author, $posted_at);        
    }

    public function getLastRouteId(){
        return $this->repository->getLastRouteId();
    }

    public function getDestinationsForRoute($route_id){
        return $this->repository->getDestinationsForRoute($route_id);
    }
}
?>