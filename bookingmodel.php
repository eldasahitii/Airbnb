<?php
class Booking {
    private $apartment;
    private $name;
    private $surname;
    private $phone;
    private $email;
    private $check_in;
    private $check_out;
    private $adults;
    private $kids;
    private $special_request;

    public function __construct($apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request) {
        $this->apartment = $apartment;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->email = $email;
        $this->check_in = $check_in;
        $this->check_out = $check_out;
        $this->adults = $adults;
        $this->kids = $kids;
        $this->special_request = $special_request;
    }

    public function getApartment() {
        return $this->apartment;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCheckIn() {
        return $this->check_in;
    }

    public function getCheckOut() {
        return $this->check_out;
    }

    public function getAdults() {
        return $this->adults;
    }

    public function getKids() {
        return $this->kids;
    }

    public function getSpecialRequest() {
        return $this->special_request;
    }
}

?>
