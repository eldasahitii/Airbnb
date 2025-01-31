<?php
require_once 'BookingModel.php';
require_once 'BookingRepository.php';


session_start();
if (!isset($_SESSION['email'])) {
    header("Location: LogIn.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $apartment = $_POST['apartment'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $check_in = $_POST['checkin'];
    $check_out = $_POST['checkout'];
    $adults = $_POST['adults'];
    $kids = $_POST['kids'];
    $special_request = isset($_POST['special_request']) ? $_POST['special_request'] : null;

  
    $booking = new BookingModel($apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request);

  
    $bookingRepo = new BookingRepository();

    $bookingId = $bookingRepo->createBooking($booking);

    if ($bookingId) {
        echo "Booking Successful! Booking ID: " . $bookingId;
        header("Location: Home.php"); 
    } else {
        echo "Error: Could not complete the booking.";
    }
}
?>
