<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/route.php';
require __DIR__ . '/../models/destination.php';

class RouteRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT route_id, title, route_description, firstname, posted_at 
            FROM route 
            JOIN user AS u 
            ON u.user_id = route.author_id;");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Route');
            $articles = $stmt->fetchAll();

            return $articles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insertRoute($newRowId, $title, $description, $authorEmail, $posted_at) {
        try {
            // First, retrieve the author_id based on the provided email address
            $authorStmt = $this->connection->prepare("SELECT user_id FROM user WHERE emailaddress = ?");
            $authorStmt->execute([$authorEmail]);
            $authorId = $authorStmt->fetch(PDO::FETCH_COLUMN);
    
            // Then, insert the new route record with the retrieved author_id
            $stmt = $this->connection->prepare("INSERT INTO route (route_id, title, route_description, author_id, posted_at)
                                                VALUES (?, ?, ?, ?, ?)");            
            $success = $stmt->execute([$newRowId, $title, $description, $authorId, $posted_at]);
    
            return $success;
        } catch (PDOException $e) {
            echo $e;
            return false;
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

    function getDestinationsForRoute($route_id){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM destination WHERE route_id = ?");
            $stmt->execute(array($route_id));

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
            $articles = $stmt->fetchAll();

            return $articles;
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
