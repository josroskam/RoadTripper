<?php
require __DIR__ . '/../repositories/userrepository.php';


class UserService {
    public function getAll() {
        // retrieve data
        $repository = new UserRepository();
        $articles = $repository->getAll();
        return $articles;
    }

    public function insert($article) {
        // retrieve data
        $repository = new UserRepository();
        $repository->insert($article);        
    }

    public function getUser($emailaddress, $password) { 
        // retrieve data
        $repository = new UserRepository();
        $user = $repository->getUser($emailaddress, $password);
        return $user;
    }
}

?>