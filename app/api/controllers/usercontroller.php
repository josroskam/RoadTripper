<?php
require __DIR__ . '/../../services/userservice.php';

class UserController
{
    private $userService;

    // initialize services
    function __construct()
    {
        $this->userService = new UserService();
    }

    // router maps this to /api/article automatically
    public function index()
    {
        // Respond to a GET request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");

            $userData = [
                "firstname" == 'fname',
                "lastname" == 'lname',
                "emailaddress" == 'email',
                "destination" == 'dnation'
            ];

            // return all articles in the database as JSON
            header('Content-Type: application/json');
            echo json_encode($userData);
        }

        // Respond to a DELETE request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");    
        
            // Get the user's email address from the session
            $sessionEmail = $_SESSION["email"];
        
            // Call user service to delete user
            try {
                $this->userService->deleteUser($sessionEmail);
                // http_response_code(200);
                // echo json_encode(['success' => true,
                //  'message' => 'Account deleted successfully'
                // ])
                // ;
                header("Location: /logout");

                exit;
            } catch (Exception $e) {
                http_response_code(400);
                echo json_encode(['success' => false, 'error' => $e->getMessage()]);
                exit;
            }
        }
    }
}
?>