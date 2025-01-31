<?php

class Contact {
    private $id;
    private $name;
    private $email;
    private $message;
    private $is_read;
    private $created_at;

    public function __construct($name, $email, $message, $is_read = 0, $id = null, $created_at = null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->is_read = $is_read;
        $this->created_at = $created_at;
    }

    public function getId() { 
        return $this->id; }
    public function getName() { 
        return $this->name; }
    public function getEmail() { 
        return $this->email; }
    public function getMessage() { 
        return $this->message; }
    public function isRead() { 
        return $this->is_read; }
    public function getCreatedAt() { 
        return $this->created_at; }
}

?>
