<?php
class DatabaseConnection {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "projekti_final";

    function startConnection() {
        try {    
            $con = new PDO(
                "mysql:host=$this->server;dbname=$this->database",
                $this->username,
                $this->password
            );
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;  
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            return null;
        }
    }
}
?>
