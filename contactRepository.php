<?php

include_once 'Database.php';
include_once 'contactModel.php';

class ContactRepository {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnection();
    }

    public function insertMessage($message) {
        $conn = $this->connection;

        
        $name = $message->getName();
        $email = $message->getEmail();
        $messageContent = $message->getMessage();
        $isRead = $message->isRead();

        
        $sql = "INSERT INTO inbox (name, email, message, is_read, created_at) VALUES (?, ?, ?, ?, NOW())";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $email, $messageContent, $isRead]);

        
        echo "<script>alert('Message has been inserted successfully!');</script>";
    }

    public function getAllMessages() {
        $conn = $this->connection;
        
        $sql = "SELECT * FROM contacts";
        $statement = $conn->query($sql);
        $messages = $statement->fetchAll();

        return $messages;
    }

    public function deleteMessage($id) {
        try {
            $sql = "DELETE FROM inbox WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function markAsRead($id) {
        try {
            $sql = "UPDATE inbox SET is_read = 1 WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>
