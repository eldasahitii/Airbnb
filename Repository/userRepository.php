<?php
include_once "../Database/databaseConnection.php";


class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection= $conn->startConnection();

    }

    function insertUser($user){
        $conn=$this->connection;

        $id=$user->getId();
        $name=$user->getName();
        $surname=$user->getSurname();
        $email=$user->getEmail();
        $username=$user->getUsername();
        $password=$user->getPassword();

        $sql="INSERT INTO user(id, name, surname, email, username, password) VALUES (?,?,?,?,?,?)";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$username,$password]);
        echo "<script> alert ("User has been inserted succesessfully!"); </script>";



    }
    function getAllUsers(){
        $conn=$this->connection;
        $sql="SELECT * FROM user ";
        $statement=$conn->query($sql);
        $users=$statement->fetch();

        return $users;


    }

    function getUserById(){
        $conn=$this->connection;

        $sql="SELECT * FROM user WHERE id="$id"";

        $statement=$conn->query($sql);
        $user=$statement->fetch();

        return $user;
    }
 
    function updateUser($id,$name,$surname,$email,$username,$password){
        $conn=$this->connection;
        $sql="UPDATE user SET name=?,surname=?,email=?,username=?,password=? WHERE id=?";
        
        $statement=$conn->preapare($sql);
        $statement->execute([$id, $name, $surname, $email, $surname, $password]);
        echo "<script> alert("Update was successfully!"); </script>";


    }

    function deleteUser($id){
        $conn=$this->connection;
        $sql="DELETE FROM user WHERE id=?";
        $statement=$conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Delete was successfully!);</script>";

    }









}



?>