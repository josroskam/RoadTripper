<?php
require __DIR__ . '/../repositories/userrepository.php';


class UserService {

    private $repository;

    function __construct() {
        $this->repository = new UserRepository();
    }

    public function insert($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination) {
        return $this->repository->insert($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination);        
    }

    public function getUser($emailaddress, $password) { 
        return $this->repository->getUser($emailaddress, $password);
    }

    public function getUserByEmailaddress($emailaddress) { 
        return $this->repository->getUserById($emailaddress);
    }


    public function checkUserPassword($email, $password) { 
        return $this->repository->checkUserPassword($email, $password);
    }

    public function checkUserExists($email){
        if ($this->repository->checkUserExists($email))
            return false;
        return true;
    }

    public function updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail){
        return $this->repository->updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail);
    }

    public function deleteUser($email){
        return $this->repository->deleteUser($email);
    }
}
?>