<?php

include_once './Database/databaseConnection.php';
include_once './Model/user.php';

class UserRepository {
    private $connection; 

   
    function __construct() {
        $conn = new DatabaseConnection(); 
        $this->connection = $conn->startConnection(); 
    }


    function insertUser($user) {
        $conn = $this->connection;

   
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $confirmP=$user->getConfirmP();

   
        $sql = "INSERT INTO user (id, name, surname, email, password, confirmP) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql); 

   
        $statement->execute([$id, $name, $surname, $email, $password, $confirmP]);

       
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        return $users; 
    }

    
    function getUserById($id) {
        $conn = $this->connection;

     
        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql); 
        $user = $statement->fetch(); 

        return $user;
    }

    
    function updateUser($id, $name, $surname, $email, $password, $confirmP) {
        $conn = $this->connection;


        $sql = "UPDATE user SET name=?, surname=?, email=?, password=?, confirmP=? WHERE id=?";

        $statement = $conn->prepare($sql); 

      
        $statement->execute([$name, $surname, $email, $password,$confirmP, $id]);

      
        echo "<script>alert('Update was successful');</script>";
    }

    
    function deleteUser($id) {
        $conn = $this->connection;

      
        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql); 

       
        $statement->execute([$id]);

       
        echo "<script>alert('Delete was successful');</script>";
    }
}


?>
