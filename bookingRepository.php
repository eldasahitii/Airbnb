<?php
require_once 'Database.php';
require_once 'BookingModel.php';

class BookingRepository {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function createBooking(BookingModel $booking) {
        $query = "INSERT INTO bookings (apartment, name, surname, phone, email, check_in, check_out, adults, kids, special_request) 
                  VALUES (:apartment, :name, :surname, :phone, :email, :check_in, :check_out, :adults, :kids, :special_request)";
        
        $stmt = $this->conn->prepare($query);
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
            return $this->conn->lastInsertId();
        } else {
            return false;
        }
    }

}
?>
