<?php

class User{
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;

    function __construct($username,$email,$password,$role){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
    }

    function getId(){
        return $this->id;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
}

?>