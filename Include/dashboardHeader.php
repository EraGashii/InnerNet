<?php 
session_start();

if(isset($_SESSION['id']) && $_SESSION['role'] == 'client'){
  header('Location:Index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="image/InsideOut.png" alt="">
          <h1>InsideOut</h1>
        </div>
        <ul>
          <li><a href="dashboard.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="clients.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Clients</span>
          </a>
          </li>
          <li><a href="Service.php">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Servics</span>
          </a>
          </li>
          <li><a href="psychologist-create.php">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Psychologist</span>
          </a>
          </li>
          <li><a href="message.php">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Messages</span>
          </a>
          </li>
          <li><a href="logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>