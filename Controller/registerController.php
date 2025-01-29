<?php
include_once "./Repository/userRepository.php";
include_once "./Model/user.php";


if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
    empty($_POST['password']) || empty($_POST['confirmP'])) {
    echo "Fill all fields!";
} else {
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmP = $_POST['confirmP'];

    
    if ($password !== $confirmP) {
        echo "Passwords do not match!";
    } else {
      
        $id = $email . rand(100, 999);
        $user = new User($id, $name, $surname, $email, $password, $confirmP);
        
   
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);

        echo "User has been registered successfully!";
    }
}
?>
