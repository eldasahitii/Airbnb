<?php
include_once 'userRepository.php';
include_once 'user.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Fill all fields!";
    } else {
        $name = trim($_POST['name']);          
        $surname = trim($_POST['surname']);    
        $email = trim($_POST['email']);       
        $password = trim($_POST['password']);  

      
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format.");
        }

       
        if (strlen($password) < 8) {
            die("Password must be at least 8 characters long.");
        }

        
        $id = $name . rand(100, 999);

    
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        
        $user = new User($id, $name, $surname, $email, $hashedPassword);

    
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);

       
        header("Location: LogIn.php");
        exit;
    }
}
?>
