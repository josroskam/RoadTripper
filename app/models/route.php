<?php

class Route implements JsonSerializable{

    private int $route_id;
    private string $title;
    private string $description;
    private int $author_id;
    private DateTime $posted_at;

    public function __construct() {
        // allocate your stuff
    }

    public static function NewDestination($route_id, $title, $description, $author_id, $posted_at) {
        $route = new Route();
        $route->setRouteId($route_id);
        $route->setTitle($title);
        $route->setDescription($description);
        $route->setAuthorId($author_id);
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
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getAuthorId() {
        return $this->author_id;
    }

    public function setAuthorId($author_id) {
        $this->author_id = $author_id;
    }

    public function getPostedAt() {
        return $this->posted_at;
    }

    public function setPostedAt($posted_at) {
        $this->posted_at = $posted_at;
    }
}

?>