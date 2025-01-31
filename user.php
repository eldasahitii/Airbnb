<?php

class User {

    private $id;        
    private $name;       
    private $surname;    
    private $email;      
    private $password;  


    function __construct($id, $name, $surname, $email, $password,  $role = 'user') {
        $this->id = $id;              
        $this->name = $name;           
        $this->surname = $surname;    
        $this->email = $email;        
        $this->password = $password;   
        $this->role = $role;
    }

 
    function getId() {
        return $this->id;
    }

  
    function getName() {
        return $this->name;
    }

   
    function getSurname() {
        return $this->surname;
    }

  
    function getEmail() {
        return $this->email;
    }

  
    function getPassword() {
        return $this->password;
    }
    function getRole() {
         return $this->role;
         }
}

?>
