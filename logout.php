<?php
  session_start();

  session_destroy();

  header("location:LogIn.php");
?>
<?php

// session_start();
// if (isset($_SESSION["user_id"])) {
//     $_SESSION = array();
//     session_destroy();
//     header("Location: index.php");
//     exit();
// } else {
//     header("Location: login.html");
//     exit();
// }  
