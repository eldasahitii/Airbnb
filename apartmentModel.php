<?php
class Apartment {
    private $id;
    private $name;
    private $location;
    private $price;
    private $image;

    public function __construct($id, $name, $location, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->price = $price;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }
}
?>
