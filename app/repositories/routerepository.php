<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/route.php';

class RouteRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM article");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
            $articles = $stmt->fetchAll();

            return $articles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insertRoute($newRowId, $title, $description, $author, $posted_at) {
        try {
            $stmt = $this->connection->prepare("INSERT into route (route_id, title, route_description, author_id, posted_at) VALUES (?,?,?,?,?)");            
            if(!$stmt->execute([$newRowId, $title, $description, $author, $posted_at])){
                return false;
            }
            return true;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getLastRouteId(){
        try {
            $stmt = $this->connection->prepare("SELECT route_id FROM route ORDER BY route_id DESC LIMIT 1");
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
