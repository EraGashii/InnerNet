<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Login.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <header> 
      <?php
    $showDashboardLink = false;

    if (isset($_SESSION['email'])) {
        if ($_SESSION['role'] == "admin") {
            $showDashboardLink = true;
        }
    }
     ?>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="Index.php" class="logo"><img src="image/InsideOut.png" width="90px"></a>
      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="Index.php">Home</a></li>
        <li><a href="Features.php">Features</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <?php 
         if ($showDashboardLink) {
          ?>
          <li><a href="dashboard.php">Dashboard</a></li>
          <?php
      }
        if (isset($_SESSION['id'])) {
            ?>
            <li><a href="logout.php">Log Out</a></li>
            <?php
        } else {
            ?>
            <li><a href="Login.php">Log In</a></li>
            <?php
        }
        ?>
      </ul>
    </nav>
  </header>