<?php

$bookingId = $_GET['id'];

include_once 'BookingRepository.php';

$bookingRepository = new BookingRepository();


$booking = $bookingRepository->getBookingById($bookingId);

if (isset($_POST['editBtn'])) {
  
    $id = $booking['id'];
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

    
    $bookingRepository->updateBooking($id, $apartment, $name, $surname, $phone, $email, $check_in, $check_out, $adults, $kids, $special_request);

  
    header("Location: Dashboard.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
</head>
<body>
    <h3>Edit Booking</h3>
    <form action="" method="post">
        <input type="text" name="id" value="<?=$booking['id']?>" readonly> <br> <br>

        <label for="apartment">Apartment:</label>
        <input type="text" name="apartment" value="<?=$booking['apartment']?>"> <br> <br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?=$booking['name']?>"> <br> <br>
        
        <label for="surname">Surname:</label>
        <input type="text" name="surname" value="<?=$booking['surname']?>"> <br> <br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?=$booking['phone']?>"> <br> <br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?=$booking['email']?>"> <br> <br>
        
        <label for="check_in">Check-in:</label>
        <input type="date" name="check_in" value="<?=$booking['check_in']?>"> <br> <br>
        
        <label for="check_out">Check-out:</label>
        <input type="date" name="check_out" value="<?=$booking['check_out']?>"> <br> <br>

        <label for="adults">Adults:</label>
        <input type="number" name="adults" value="<?=$booking['adults']?>"> <br> <br>

        <label for="kids">Kids:</label>
        <input type="number" name="kids" value="<?=$booking['kids']?>"> <br> <br>

        <label for="special_request">Special Request:</label>
        <textarea name="special_request"><?=$booking['special_request']?></textarea> <br> <br>

        <input type="submit" name="editBtn" value="Save Changes"> <br> <br>
    </form>
</body>
</html>
