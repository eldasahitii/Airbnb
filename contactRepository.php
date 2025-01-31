<?php

include_once 'Database.php';
include_once 'contactModel.php';

class ContactRepository {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function insertMessage(Contact $message) {
        try {
            $sql = "INSERT INTO contacts (name, email, message, is_read, created_at) VALUES (?, ?, ?, ?, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $message->getName(),
                $message->getEmail(),
                $message->getMessage(),
                $message->isRead()
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getAllMessages() {
        $sql = "SELECT * FROM contacts ORDER BY id DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function markAsRead($id) {
        $sql = "UPDATE contacts SET is_read = 1 WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function deleteMessage($id) {
        $sql = "DELETE FROM contacts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}

?>
