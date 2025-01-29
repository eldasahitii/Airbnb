<?php
class DatabaseConnection {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "projekti_final";

    public function startConnection() {
        try {
            $conn = new PDO(
                "mysql:host=$this->server;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            return null;
        }
    } 
}
?>
