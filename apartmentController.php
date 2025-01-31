<?php
include_once 'apartmentRepository.php';

class ApartmentController {
    private $apartmentRepo;

    public function __construct($db) {
        $this->apartmentRepo = new ApartmentRepository($db);
    }

    
    public function getApartments() {
        return $this->apartmentRepo->getApartments();
    }

   
    public function addApartment($name, $location, $price, $image) {
        $this->apartmentRepo->addApartment($name, $location, $price, $image);
    }
}
?>
