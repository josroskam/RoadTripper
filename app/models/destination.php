<?php

class Destination implements JsonSerializable{
    private int $destination_id;
    private string $address;
    private string $city;
    private string $country;
    private string $longitude;
    private string $latitude;
    private int $route_id;

    public function __construct() {
        // allocate your stuff
    }

    public static function NewDestination($destination_id, $address, $city, $country, $longitude, $latitude, $route_id) {
        $instance = new self();
        $instance->setDestinationId($destination_id);
        $instance->setAddress($address);
        $instance->setCity($city);
        $instance->setCountry($country);
        $instance->setLongitude($longitude);
        $instance->setLatitude($latitude);
        $instance->setRouteId($route_id);
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
    public function getDestinationId(): int
    {
        return $this->destination_id;
    }

    /**
     * Set the value of id
     *
     * @param int $destination_id
     *
     * @return self
     */
    public function setDestinationId(int $destination_id): self
    {
        $this->destination_id = $destination_id;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the value of firstname
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of lastname
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of emailaddress
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Set the value of emailaddress
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * Set the value of password
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * Set the value of favorite_holiday_destination
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getRouteId(): int
    {
        return $this->route_id;
    }

    /**
     * Set the value of route id (where the destination belongs to)
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setRouteId(int $routeId): self
    {
        $this->route_id = $routeId;
        return $this;
    }

    public function incrementRouteId(int $incrementAmount): self
{
    $this->route_id += $incrementAmount;
    return $this;
}
}

?>