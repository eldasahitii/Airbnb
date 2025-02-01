<?php
include_once 'BookingRepository.php'; 
$data = json_decode(file_get_contents('php://input'), true); // Get the data sent by JavaScript

$apartment_id = $data['apartment_id'];
$check_in = $data['check_in'];
$check_out = $data['check_out'];

$bookingRepository = new BookingRepository();
$isAvailable = $bookingRepository->isApartmentAvailable($apartment_id, $check_in, $check_out);

echo json_encode(['available' => $isAvailable]);
?>