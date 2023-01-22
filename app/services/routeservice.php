<?php
require __DIR__ . '/../repositories/routerepository.php';


class RouteService {
    public function getAll() {
        // retrieve data
        $repository = new RouteRepository();
        $articles = $repository->getAll();
        return $articles;
    }

    public function insertRoute($newRowId, $title, $description, $author, $posted_at) {
        // retrieve data
        $repository = new RouteRepository();
        return $repository->insertRoute($newRowId, $title, $description, $author, $posted_at);        
    }

    public function getLastRouteId(){
        $repository = new RouteRepository();
        return $repository->getLastRouteId();
    }
}
?>