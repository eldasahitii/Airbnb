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

     
        $sql = "INSERT INTO user (id, name, surname, email, password) VALUES (?, ?, ?, ?, ?)";

      
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $surname, $email, $password]);

  
        echo "<script>alert('User has been inserted successfully!');</script>";
    }


    public function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

   
    public function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch();

        return $user;
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

        // Use prepared statements to avoid SQL injection
        $sql = "SELECT * FROM user WHERE email = :email";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        // Fetch the user data if available
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user; // Returns user data or false if not found
    }
}


?>
