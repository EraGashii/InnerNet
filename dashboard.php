<?php
session_start();

include_once 'database/DatabaseConnection.php';
include 'include/dashboardHeader.php';

?>


    <section class="main">
      <div class="main-top">
        <p>Dashbohhard</p>
      </div>
       <div class="main-body"> 
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google-drive"></i>
          </div>
          <div class="text">
             <?php echo $adminName; ?>
            <span>Admin of InsideOut</span>
          </div>
        </div>
      </div>
      
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google"></i>
          </div>
          <li><a href="clients.php">
          <div class="text">
            <h2>Clients</h2>
            <span>Client-InsideOut</span>
          </div>
          </a>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-facebook"></i>
          </div>
          <li><a href="Service.php">
          <div class="text">
            <h2>Servics</h2>
            <span>Servics-InsideOut</span>
          </div>
          </a>
        </div>
        </div>
        <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-facebook"></i>
          </div>
          <li><a href="psychologist-create.php">
          <div class="text">
            <h2>Psychologist</h2>
            <span>Psychologist-InsideOut</span>
          </div>
          </a>
        </div>
        </div>
        <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-facebook"></i>
          </div>
          <li><a href="message.php">
          <div class="text">
            <h2>Messages</h2>
            <span>Messages-InsideOut</span>
          </div>
          </a>
        </div>
        </div>
     
    </section>
  </div>
</span>
<?php
// function getAdminName($conn, $userId)
// {
//     $query = "SELECT username FROM User WHERE id = $userId AND role = 'admin'";
//     $result = $conn->query($query);

//     if ($result === false) {
//         echo "Error: " . $conn->error; 
//         return '';
//     }

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         return $row['username'];
//     } else {
//         return '';
//     }
// }
// $userId = 1;

// $adminName = getAdminName($conn, $userId);

// if (isset($_SESSION["id"])) {
//     echo '<form class="logout-form" action="../logout.php" method="post">
//               <button class="cta" type="submit">Logout</button>
//           </form>';
// } else {
//     echo '<a class="cta" href="login.php">Login</a>';
// }

   
//     if (isset($_SESSION["id"])) {
//         echo '<a class="cta-mobile" href="../logout.php">Logout</a>';
//     } else {
//         echo '<a class="cta-mobile" href="logIn.php">Login</a>';
//     }

    ?>