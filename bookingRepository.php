<?php
include_once 'Database.php';
include_once 'BookingModel.php';

class BookingRepository {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnection();
    }

    public function insertBooking($booking) {
        $conn = $this->connection;

        $sql = "INSERT INTO bookings (apartment, name, surname, phone, email, check_in, check_out, adults, kids, special_request,created_at)
         VALUES (:apartment, :name, :surname, :phone, :email, :check_in, :check_out, :adults, :kids, :special_request, NOW())";          
        $stmt = $conn->prepare($sql);

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
            return false;
        }
    }

    public function getAllBookings() {
        $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public function deleteBooking($id) {
    $conn = $this->connection;

    $sql = "DELETE FROM bookings WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);

    echo "<script>alert('Delete was successful');</script>";
}
public function getBookingById($id) {
    $conn = $this->connection;

    $sql = "SELECT * FROM bookings WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
    $users = $statement->fetch();

    return $users;
}
public function updateBooking($id, $apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request) {
    $conn = $this->connection;

    $sql = "UPDATE bookings 
            SET apartment = :apartment, name = :name, surname = :surname, phone = :phone, 
                email = :email, check_in = :check_in,  
                check_out = :check_out,  adults = :adults,  
                kids = :kids, special_request = :special_request
            WHERE id = :id";

    
    $statement = $conn->prepare($sql);


    $statement->bindParam(':apartment', $apartment);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':surname', $surname);
    $statement->bindParam(':phone', $phone);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':check_in', $check_in);
    $statement->bindParam(':check_out', $check_out);
    $statement->bindParam(':adults', $adults);
    $statement->bindParam(':kids', $kids);
    $statement->bindParam(':special_request', $special_request);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);

  
    $statement->execute();

    echo "<script>alert('Update was successful');</script>";
}
public function isApartmentAvailable($apartment_id, $check_in, $check_out) {
    $conn = $this->connection;

    
    $sql = "SELECT * FROM bookings 
            WHERE apartment = :apartment_id 
            AND ( (check_in BETWEEN :check_in AND :check_out) 
                OR (check_out BETWEEN :check_in AND :check_out)
            )";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':apartment_id', $apartment_id);
    $stmt->bindParam(':check_in', $check_in);
    $stmt->bindParam(':check_out', $check_out);

    
    $stmt->execute();

 
    return $stmt->rowCount() == 0;
}

}

?>
