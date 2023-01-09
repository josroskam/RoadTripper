<?php
require __DIR__ . '/../../services/articleservice.php';

class ArticleController
{

    private $articleService;

    // initialize services
    function __construct()
    {
        $this->articleService = new ArticleService();
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
            $articles = $this->articleService->getAll();
            header('Content-Type: application/json');
            echo json_encode($articles);

        }

        // Respond to a POST request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: *");
            
            // your code here
            // read JSON from the request, convert it to an article object
            $articleObject = json_decode(file_get_contents('php://input',true));

            $article = new Article();
            $article->setTitle(htmlspecialchars($articleObject->title));
            $article->setContent(htmlspecialchars($articleObject->content));
            $article->setAuthor('Mark');
            
            
            // and have the service insert the article into the database
            $this->articleService->insert($article);

            header('Content-Type: application/json');
            echo json_encode($article);

        }
    }
}
?>