<?php

class User implements JsonSerializable{
    private int $user_id;
    private string $firstname;
    private string $lastname;
    private string $emailaddress;
    private string $password;
    private string $favorite_holiday_destination;

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

    // $student = Student::withID( $id );

    public function jsonSerialize() : mixed{
        return get_object_vars($this);
    }
    
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->user_id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of emailaddress
     *
     * @return string
     */
    public function getEmailaddress(): string
    {
        return $this->emailaddress;
    }

    /**
     * Set the value of emailaddress
     *
     * @param string $emailaddress
     *
     * @return self
     */
    public function setEmailaddress(string $emailaddress): self
    {
        $this->emailaddress = $emailaddress;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFavorite_Holiday_Destination(): string
    {
        return $this->favorite_holiday_destination;
    }

    /**
     * Set the value of favorite_holiday_destination
     *
     * @param string $favorite_holiday_destination
     *
     * @return self
     */
    public function setFavorite_Holiday_Destination(string $favorite_holiday_destination): self
    {
        $this->favorite_holiday_destination = $favorite_holiday_destination;

        return $this;
    }
}

?>