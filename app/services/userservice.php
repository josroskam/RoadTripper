<?php
require __DIR__ . '/../repositories/userrepository.php';


class UserService {
    public function getAll() {
        // retrieve data
        $repository = new UserRepository();
        $articles = $repository->getAllUsers();
        return $articles;
    }

    public function insert($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination) {
        // retrieve data
        $repository = new UserRepository();
        $repository->insert($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination);        
    }

    public function getUser($emailaddress, $password) { 
        // retrieve data
        $repository = new UserRepository();
        return $repository->getUser($emailaddress, $password);
        //  return $user;
    }

    public function getUserByEmailaddress($emailaddress) { 
        // retrieve data
        $repository = new UserRepository();
        return $repository->getUserById($emailaddress);
        //  return $user;
    }


    public function checkUserPassword($email, $password) { 
        // retrieve data
        $repository = new UserRepository();
        return $repository->checkUserPassword($email, $password);
        //  return $user;
    }

    public function checkUserExists($email){
        $repository = new UserRepository();
        if ($repository->checkUserExists($email))
            return false;
        return true;
    }

    public function updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail){
        $repository = new UserRepository();
        $repository->updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail);
    }

    public function deleteUser($email){
        $repository = new UserRepository();
        $repository->deleteUser($email);
    }
}

?>