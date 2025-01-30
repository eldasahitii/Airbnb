<?php
class User {
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;

    public function __construct($id, $name, $surname, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Secure the password
    }

 
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}
?>
