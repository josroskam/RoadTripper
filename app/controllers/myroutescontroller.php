<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/routeservice.php';
require_once __DIR__ . '/../models/user.php';

class MyRoutesController extends Controller {
    private $routeService;

    // initialize services
    function __construct() {
        $this->routeService = new RouteService();
    }
    public function index() {
        require __DIR__ . '/../views/myroutes/index.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            // authoremail is session email
            $author = $_SESSION['email'];
            $posted_at = date("Y-m-d");;
                        
            // Do something with the data, such as inserting it into a database
            if($this->routeService->insertRoute(NULL, $title, $description, $author, $posted_at)){
                echo "<script>userRegisteredSuccessfully('Route added successfully.');</script>";
            }else{
                echo "<script>userRegisteredFailed('Route could not be saved.');</script>";
            }
        }
    }
}
?>