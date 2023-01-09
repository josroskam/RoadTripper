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

    public static function User($id, $firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination) {
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
     * Set the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return string
     */
    public function getEmailaddress(): string
    {
        return $this->emailaddress;
    }

    /**
     * Set the value of author
     *
     * @param string $author
     *
     * @return self
     */
    public function setEmailaddress(string $emailaddress): self
    {
        $this->emailaddress = $emailaddress;

        return $this;
    }

    /**
     * Get the value of datetime
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of datetime
     *
     * @param string $datetime
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
     * Set the value of datetime
     *
     * @param string $datetime
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