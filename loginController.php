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
        if ($user['signInName'] == $signInName && $user['password'] == $password) {

  
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
  
        <!-- // if (!$stmt) {
        //     die("Query preparation failed: " . mysqli_error($conn));
        // }

        // mysqli_stmt_bind_param($stmt, "s", $signInName);
        // mysqli_stmt_execute($stmt);

        // $result = mysqli_stmt_get_result($stmt);

        // if (!$result) {
        //     die("Query failed: " . mysqli_error($conn));
        // }

        // $user = mysqli_fetch_assoc($result);

//         if ($user && password_verify($password, $user['password'])) {
//             $_SESSION['id'] = $user['id'];
//             $_SESSION['signInName'] = $user['signInName'];
//             $_SESSION['email'] = $user['email'];
//             $_SESSION['role'] = $user['role'];
//             $_SESSION['loginTime'] = date("h:i:s");

//             session_regenerate_id();

//             header("Location: ../index.php");
//             exit();
//         } else {
//             echo "Incorrect username or password";
//         }

//         mysqli_stmt_close($stmt);
//     }
// }

// mysqli_close($conn);
?> -->





