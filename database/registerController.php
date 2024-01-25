<?php
include '../database/userRepository.php';
include '../database/user.php';



if(isset($_POST['signup'])){
    if( empty($_POST['username']) || empty($_POST['email'])  || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $id = rand(1,999);
        // $role="user";
        $id = $username.rand(100,999);
       

 
        $user  = new User($id,$username,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
 

        // header('Location:Index.php');
        // $userRepository->insertUser($username, $email, $password,$roli);

    }
}

?>