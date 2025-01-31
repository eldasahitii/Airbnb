<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: Home.php");
    exit;
}

include_once 'userRepository.php';

$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();
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
            <!-- <th>Edit</th> 
            <th>Delete</th>  -->
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
              
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
