<?php

class User implements JsonSerializable{
    private $user_id;
    private $firstname;
    private $lastname;
    private $emailaddress;
    private $password;
    private $favorite_holiday_destination;

    public function __construct() {
        // allocate your stuff
    }

    public static function NewUser($id, $firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination) {
        $instance = new self();
        $instance->setId($id);
        $instance->setFirstname($firstname);
        $instance->setLastname($lastname);
        $instance->setEmailaddress($emailaddress);
        $instance->setPassword($password);
        $instance->setFavorite_Holiday_Destination($favorite_holiday_destination);
        return $instance;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
    
    public function getId() {
        return $this->user_id;
    }

    public function setId($user_id) {
        $this->user_id = $user_id;
        return $this;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function getEmailaddress() {
        return $this->emailaddress;
    }

    public function setEmailaddress($emailaddress) {
        $this->emailaddress = $emailaddress;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getFavorite_Holiday_Destination() {
        return $this->favorite_holiday_destination;
    }

    public function setFavorite_Holiday_Destination($favorite_holiday_destination) {
        $this->favorite_holiday_destination = $favorite_holiday_destination;
        return $this;
    }
}

?>
