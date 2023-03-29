<?php
    require_once( __DIR__ . '/../repositories/destinationrepository.php');

class DestinationService {
    private $repository;
    function __construct() {
        $this->repository = new DestinationRepository();
    }

    public function getAll() {
        // retrieve data
        $destinations = $this->repository->getAll();
        return $destinations;
    }

    public function insert($destination) {
        return $this->repository->insert($destination);        
    }

    public function getLastRouteId(){
        return $this->repository->getLastRouteId();
    }   
}
?>