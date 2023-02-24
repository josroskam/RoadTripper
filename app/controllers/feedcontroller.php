<?php
session_start();
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/routeservice.php';

class FeedController extends Controller {
    private $routeService;
    // initialize services
    function __construct() {
        $this->routeService = new RouteService();
    }

    public function index() {
        // retrieve data 
        $routes = $this->routeService->getAll();
        $num_routes = count($routes);

        $dictionary = array();

        // if number of routes is 0, then there are no routes
        if ($num_routes != 0) {
            for ($i = 0; $i < $num_routes; $i++) {
                $route = $routes[$i];
                $destinations = $this->routeService->getDestinationsForRoute($route->getRouteId());
                $num_destinations = count($destinations);
                $dictionary["route_$i"] = array(
                    "route" => $route,
                    "destinations" => array()
                );
                for ($j = 0; $j < $num_destinations; $j++) {
                    $dictionary["route_$i"]["destinations"][] = $destinations[$j];
                }
            }        
            $this->displayView($dictionary);
        } else{
            include './../views/feed/index.php';
        }


    }

    public function displayView($dictionary) {
        extract($dictionary);
        include './../views/feed/index.php';
    }
}
?>