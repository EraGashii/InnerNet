<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['signup'])){
    if( empty($_POST['username']) || empty($_POST['email'])  || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $id = $username.rand(100,999);

        $user  = new User($username,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>