<?php

class Route implements JsonSerializable{

    private int $route_id;
    private string $title;
    private string $route_description;
    // private int $author_id;
    private string $firstname;
    private string $posted_at;

    public function __construct() {
        // allocate your stuff
    }

    public static function NewDestination($route_id, $title, $route_description, $firstname, $posted_at) {
        $route = new Route();
        $route->setRouteId($route_id);
        $route->setTitle($title);
        $route->setDescription($route_description);
        $route->setAuthorId($firstname);
        $route->setPostedAt($posted_at);
        return $route;
    }

    public function jsonSerialize() : mixed{
        return get_object_vars($this);
    }

    public function getRouteId() {
        return $this->route_id;
    }

    public function setRouteId($route_id) {
        $this->route_id = $route_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->route_description;
    }

    public function setDescription($route_description) {
        $this->route_description = $route_description;
    }

    public function getAuthorId() {
        return $this->firstname;
    }

    public function setAuthorId($firstname) {
        $this->firstname = $firstname;
    }

    public function getPostedAt() {
        return $this->posted_at;
    }

    public function setPostedAt($posted_at) {
        $this->posted_at = $posted_at;
    }
}

?>