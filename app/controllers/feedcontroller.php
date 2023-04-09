<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/routeservice.php';

class FeedController extends Controller {
    private $routeService;
    // initialize services
    function __construct() {
        $this->routeService = new RouteService();
    }

    public function index() {
        // Retrieve data 
        $routes = $this->routeService->getAll();

        // If there are no routes, display the index view
        if (empty($routes)) {
            include __DIR__ . '/../views/feed/index.php';
            return;
        }

        $dictionary = $this->FillDictionary($routes);

        extract($dictionary);
        include __DIR__ . '/../views/feed/index.php';
    }

    // Fill the dictionary with data
    private function FillDictionary($routes) {
        $dictionary = [];

        // Loop through the routes and fetch destinations for each route
        foreach ($routes as $index => $route) {
            $destinations = $this->routeService->getDestinationsForRoute($route->getRouteId());
            $dictionary["route_$index"] = [
                "route" => $route,
                "destinations" => $destinations
            ];
        }
        return $dictionary;
    }
}
?>