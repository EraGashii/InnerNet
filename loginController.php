<?php
session_start();

include 'repository/userRepository.php';


$conn = mysqli_connect("localhost", "root", "", "InsideOut");
 
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sign-in'])) {
    if (empty($_POST["signInName"]) || empty($_POST["password"])) {
        echo '<script>alert("Fill all fields!")</script>';
    } else {
   
        $signInName = $_POST['signInName'];
        $password = $_POST['password'];
        $users=[];

        $userQuery = "SELECT * FROM user ";
     
        $usersResult = mysqli_query($conn, $userQuery);

        while($row =mysqli_fetch_assoc($usersResult)){
            $user=new User(
                $row['signInName'],
                $row['password'],
                $row['role'],
            );
            $users[]=$user;
        }
  $i=0;
  foreach($users as $user){
        // if ($user['signInName'] == $signInName && $user['password'] == $password) {
          if ($user->getSignInName() == $signInName && $user->getPassword() == $password) {

  
        $_SESSION['signInName'] = $signInName;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $user['role'];
        $_SESSION['loginTime'] = date("H:i:s");
        header("location:Index.php");
        exit();
      }else{
        $i++;
        if($i == sizeof($users)) {
          echo "Incorrect Username or Password!";
          exit();
        }
      }
    }
}
}

if(isset($_POST['signup'])){
   
    if( empty($_POST['username']) || empty($_POST['email'])  || empty($_POST['password'])){
        echo "Fill all fieldssss!";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        $user  = new User($username,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
 

        header('Location:Index.php');

    }
}

?>
  






