<?php

include_once 'Database.php';
include_once 'user.php';

class UserRepository {
    private $connection;

    
    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnection();
    }

   
    public function insertUser($user) {
        $conn = $this->connection;

      
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role=$user->getRole();

     
        $sql = "INSERT INTO user (id, name, surname, email, password, role) VALUES (?, ?, ?, ?, ?, ?)";

      
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $surname, $email, $password, $role]);

  
        echo "<script>alert('User has been inserted successfully!');</script>";
    }


    public function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $user = $statement->fetchAll();

        return $user;
    }

   
    public function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $users = $statement->fetch();

        return $users;
    }

   
    public function updateUser($id, $name, $surname, $email, $password) {
        $conn = $this->connection;

        $sql = "UPDATE user SET name = ?, surname = ?, email = ?, password = ? WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $surname, $email, $password, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    public function deleteUser($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }
    function getUserByEmail($email) {
        $conn = $this->connection;

        
        $sql = "SELECT * FROM user WHERE email = :email";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

       
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user; 
    }
}


?>
