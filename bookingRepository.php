<?php

class BookingRepository {
    private $connection;
    private $table_name = "bookings";

    public function __construct($db) {
        $this->connection = $db;
    }

    public function saveBooking($booking) {
        $query = "INSERT INTO " . $this->table_name . " (apartment, name, surname, phone, email, check_in, check_out, adults, kids, special_request) 
                  VALUES (:apartment, :name, :surname, :phone, :email, :check_in, :check_out, :adults, :kids, :special_request)";
        
        $stmt = $this->connection->prepare($query);

   
        $stmt->bindParam(':apartment', $booking->getApartment());
        $stmt->bindParam(':name', $booking->getName());
        $stmt->bindParam(':surname', $booking->getSurname());
        $stmt->bindParam(':phone', $booking->getPhone());
        $stmt->bindParam(':email', $booking->getEmail());
        $stmt->bindParam(':check_in', $booking->getCheckIn());
        $stmt->bindParam(':check_out', $booking->getCheckOut());
        $stmt->bindParam(':adults', $booking->getAdults());
        $stmt->bindParam(':kids', $booking->getKids());
        $stmt->bindParam(':special_request', $booking->getSpecialRequest());

     
        if ($stmt->execute()) {
            return true;
        } else {
            $errorInfo = $stmt->errorInfo();
            echo "Error: " . $errorInfo[2];
            return false;
        }
    }
}

?>
