<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/destination.php';

class DestinationRepository extends Repository
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

    function insert($destination) {
        try {
            $stmt = $this->connection->prepare("INSERT into destination (destination_id, address, city, country, longitute, latitude, route_id) VALUES (?,?,?,?,?,?,?)");            
            if(!$stmt->execute([NULL, $destination->getAddress(), $destination->getCity(), $destination->getCountry(), $destination->getLongitude(), $destination->getLatitude(), $destination->getDestinationId()])){
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
