<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: Home.php");
    exit;
}

include_once 'userRepository.php';
include_once 'contactRepository.php';
include_once 'BookingRepository.php';

$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();

$contactRepository = new ContactRepository();
$contacts = $contactRepository->getAllMessages();

$bookingRepository = new BookingRepository();
$bookings = $bookingRepository->getAllBookings();

$conn = Database::getInstance()->getConnection();
$query = "SELECT * FROM paragraphs";
$stmt = $conn->prepare($query);
$stmt->execute();
$paragraphs = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Dashboard</title>
</head>
<body>

<h1>Admin Dashboard</h1>
<p>Welcome, Admin! Here you can manage users.</p>
    <table border="1">
     
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Role</th>
            <th>Edit</th> 
            <th>Delete</th> 
        </tr>

        <?php 


        foreach($users as $user){
            echo 
            "
            <tr>
                <td>$user[id]</td> 
                <td>$user[name]</td>
                <td>$user[surname]</td>
                <td>$user[email]</td> 
                <td>$user[password]</td>
                <td>$user[role]</td>
                 <td><a href='edit.php?id=$user[id]'>Edit</a></td> 
                <td><a href='delete.php?id=$user[id]'>Delete</a></td>
              
            </tr>
            ";
        }
        ?>
 </table>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MESSAGE</th>
        <th>DELETE</th> 
    </tr>
    <h2>Contact Messages</h2>
    <?php 

if (!$contacts || empty($contacts)) {
    echo "<tr><td colspan='5'>No messages found.</td></tr>";
} else {
foreach($contacts as $contact){
    echo 
    "
    <tr>
        <td>$contact[id]</td> 
        <td>$contact[name]</td>
        <td>$contact[email]</td>
        <td>$contact[message]</td>
        <td><a href='deleteMessage.php?id=$contact[id]'>Delete</a></td>
      
    </tr>
    ";
}
}

?>
    </table>

    <h2>Bookings</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>APARTMENT</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>EMAIL</th>
        <th>CHECK IN</th>
        <th>CHECK OUT</th>
        <th>ADULTS</th>
        <th>KIDS</th>
        <th>SPECIAL REQUEST</th>
        <th>EDIT</th>
        <th>DELETE</th> 
    </tr>
   
    <?php 

if (!$bookings || empty($bookings)) {
    echo "<tr><td colspan='5'>No bookings found.</td></tr>";
} else {
foreach($bookings as $booking){
    echo 
   "  <tr>
                <td>{$booking['id']}</td>
                <td>{$booking['apartment']}</td>
                <td>{$booking['name']}</td>
                <td>{$booking['surname']}</td>
                <td>{$booking['email']}</td>
                <td>{$booking['check_in']}</td>
                <td>{$booking['check_out']}</td>
                <td>{$booking['adults']}</td>
                <td>{$booking['kids']}</td>
                <td>{$booking['special_request']}</td>
                <td><a href='editBooking.php?id={$booking['id']}'>Edit</a></td>
                <td><a href='deleteBooking.php?id={$booking['id']}'>Delete</a></td>
            </tr>
            ";
    
}
}

?>

</table>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newContent = $_POST['content'];
    $pageController->updatePageContent('aboutus', $newContent);
    header("Location: dashboard.php");
    exit;
}


?>

<h2>Manage About Us</h2>
<h5>Add Paragraphs</h5>

<form action="add_paragraph.php" method="POST" >
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required ><br><br>

            <label for="content" style="font-size: 16px;">Text:</label>
            <textarea id="content" name="content" rows="4" required></textarea><br>

            <button type="submit">
                Add Paragraph
            </button><br>
        </form>
<br>
        <table border="1">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>EDITED BY</th>
        <th>ACTION</th>
    </tr>
    <?php foreach ($paragraphs as $para) : ?>
        <tr>
            <td><?php echo $para['id']; ?></td>
            <td><?php echo htmlspecialchars($para['title']); ?></td>
            <td><?php echo htmlspecialchars($para['content']); ?></td>
            <td><?php echo htmlspecialchars($para['edited_by']); ?></td> 
            <td>
                <a href="delete_paragraph.php?id=<?php echo $para['id']; ?>" 
                   onclick="return confirm('Are you sure you want to delete this paragraph?');">
                   Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



</body>
</html>
