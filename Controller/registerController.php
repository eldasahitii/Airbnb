<?php
include_once('C:/xampp/htdocs/Airbnb/Database/DatabaseConnection.php');
include_once('C:/xampp/htdocs/Airbnb/Repository/userRepository.php');
include_once('C:/xampp/htdocs/Airbnb/Model/user.php');

if($_SERVER['REQUEST_METHOD'] =='POST'){
if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
    empty($_POST['password']) || empty($_POST['confirmP'])) {
    echo "Fill all fields!";
    exit;
} 
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $confirmP = $_POST['confirmP'];
    
    if(!$email){
        echo "Invalid email!";
        exit;
    }


    if ($password !== $confirmP) {
        echo "Passwords do not match!";
        exit;
    } 
        $id = uniqid("user_");
        $user = new User($id, $name, $surname, $email, $password, $confirmP);
        
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
        echo "User has been registered successfully!";

        header("Location: LogIn.php");
        exit;
    }

?>



