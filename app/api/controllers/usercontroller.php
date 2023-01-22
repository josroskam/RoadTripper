<?php
require __DIR__ . '/../../services/userservice.php';

class UserController
{

    private $routeService;

    // initialize services
    function __construct()
    {
        $this->routeService = new RouteService();
    }

    // router maps this to /api/article automatically
    public function index()
    {

        // Respond to a GET request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");
            // your code here
            // $userData = [
            //     "firstname" == $firstname,
            //     "lastname" == $lastname,
            //     "emailaddress" == $sessionEmail,
            //     "destination" == $destination
            // ];

            $userData = [
                "firstname" == 'fname',
                "lastname" == 'lname',
                "emailaddress" == 'email',
                "destination" == 'dnation'
            ];
            // echo json_enc
            // echo json_encode($userData); 
            // return all articles in the database as JSON

            // $articles = $this->routeService->getAll();
            header('Content-Type: application/json');
            echo json_encode($userData);

            echo "oke jos";
        }

        // Respond to a POST request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");
            
            // your code here
            // // read JSON from the request, convert it to an article object
            $userObject = json_decode(file_get_contents('php://input',true));

            $user = new User();
            // $user->getEmailaddress(htmlspecialchars($articleObject->title));
            // $user->setContent(htmlspecialchars($articleObject->content));
            // $user->setAuthor('Mark');
            
            
            // // and have the service insert the article into the database
            // $this->routeService->insert($article);

            header('Content-Type: application/json');

            // $userData = [
            //     "firstname" == $firstname,
            //     "lastname" == $lastname,
            //     "emailaddress" == $sessionEmail,
            //     "destination" == $destination
            // ];
            // echo json_encode($userData); 
            ?><script>window.location.href="/feed"</script><?php
        }
    }
}
?>