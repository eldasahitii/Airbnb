<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'projekti_final';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, 
            $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $exception) {
            echo "Connection failed: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
