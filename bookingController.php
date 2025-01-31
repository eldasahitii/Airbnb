<?php
require_once 'Database.php';
require_once 'Booking.php';
require_once 'BookingRepository.php';

$apartment = $_POST['apartment'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$adults = $_POST['adults'];
$kids = $_POST['kids'];
$special_request = $_POST['special_request'];


$booking = new Booking($apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request);

$database = new Database();
$db = $database->getConnection();


$bookingRepo = new BookingRepository($db);


if ($bookingRepo->saveBooking($booking)) {
    echo "Booking saved successfully!";
} else {
    echo "Failed to save booking.";
}

?>
