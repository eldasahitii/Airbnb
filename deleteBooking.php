<?php

$bookingId = $_GET['id']; 


include_once 'BookingRepository.php';

$bookingRepository = new BookingRepository();


$bookingRepository->deleteBooking($bookingId);


header("location:Dashboard.php");

?>
