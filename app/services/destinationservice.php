<?php
require_once( __DIR__ . '/../repositories/destinationrepository.php');


class DestinationService {
    public function getAll() {
        // retrieve data
        $repository = new DestinationRepository();
        $articles = $repository->getAll();
        return $articles;
    }

    public function insert($destination) {
        // retrieve data
        $repository = new DestinationRepository();
        return $repository->insert($destination);        
    }

    public function getLastRouteId(){
        $repository = new DestinationRepository();
        return $repository->getLastRouteId();
    }

   
}
?>