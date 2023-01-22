<?php

require __DIR__ . '/../../services/destinationservice.php';
// require __DIR__ . '/../../models/destination.php';

class DestinationController
{

    private $destinationService;

    // initialize services
    function __construct()
    {
        $this->destinationService = new DestinationService();
    }

    // router maps this to /api/article automatically
    public function index()
    {

        // Respond to a GET request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");
            // your code here
            // return all articles in the database as JSON
            $articles = $this->destinationService->getAll();
            header('Content-Type: application/json');
            echo json_encode($articles);

        }

        // Respond to a POST request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");

            // your code here
            // read JSON from the request, convert it to an article object
            $destinationObject = json_decode(file_get_contents('php://input',true), true);

            $destination = new Destination();
            $destination->setAddress(htmlspecialchars($destinationObject['address']));
            $destination->setCity(htmlspecialchars($destinationObject['city']));
            $destination->setCountry(htmlspecialchars($destinationObject['country']));
            $destination->setLongitude(htmlspecialchars($destinationObject['longitude']));
            $destination->setLatitude(htmlspecialchars($destinationObject['latitude']));
            $destination->setDestinationId(htmlspecialchars($this->destinationService->getLastRouteId()));            
            
            // and have the service insert the article into the database
            $this->destinationService->insert($destination);

            header('Content-Type: application/json');
            echo json_encode($destination);
        }
    }
}
?>