<?php
session_start();
include_once 'BookingModel.php';
include_once 'BookingRepository.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['apartment'], $_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], 
              $_POST['checkin'], $_POST['checkout'], $_POST['adults'], $_POST['kids'])
    ) {
       
        $apartment = trim($_POST['apartment']);
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $check_in = trim($_POST['checkin']);
        $check_out = trim($_POST['checkout']);
        $adults = trim($_POST['adults']);
        $kids = trim($_POST['kids']);
        $special_request = isset($_POST['special_request']) ? trim($_POST['special_request']) : null;
      
        if (empty($apartment) || empty($name) || empty($surname) || empty($phone) || empty($email) || empty($check_in) || empty($check_out) || empty($adults) || empty($kids)) {
            echo "<script>alert('All fields are required!'); window.history.back();</script>";
            exit();
        }

     
        

      
        $bookingRepository = new BookingRepository();
           $isAvailable = $bookingRepository->isApartmentAvailable($apartment, $check_in, $check_out);

        if (!$isAvailable) {
            echo "<script>alert('The apartment is unavailable for the selected dates. Please choose different dates.'); window.history.back();</script>";
            exit();
        }

        $booking = new Booking(null, $apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request);
        $result = $bookingRepository->insertBooking($booking);

        if ($result) {
            header("Location: Home.php");
            exit();
        } else {
            echo "<script>alert('Error processing booking! Try again.'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('Invalid form submission!'); window.history.back();</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid request!'); window.history.back();</script>";
    exit();
}
?>
