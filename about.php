<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'database/DatabaseConnection.php';
include 'Include/header1.php';
include 'repository/AboutUsRepository.php';

// Database connection details
$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

// Initialize the AboutUsRepository
$aboutUsRepository = new AboutUsRepository();

// Retrieve content from the database
$aboutUsList = $aboutUsRepository->getAllAboutUs();

if (!empty($aboutUsList)) {
    // Assuming you want to display the first record (you can modify based on your requirements)
    $firstAboutUs = $aboutUsList[0];
    $name = $firstAboutUs['name'];
    $description = $firstAboutUs['description'];
} else {
    $name = "Default Name";
    $description = "Default Description";
}


?>
<script>
    const nav = document.querySelector(".nav"),
     navOpenBtn = document.querySelector(".navOpenBtn"),
     navCloseBtn = document.querySelector(".navCloseBtn");
   
   navOpenBtn.addEventListener("click", () => {
     nav.classList.add("openNav");
    //  searchIcon.classList.replace("uil-times");
   });
   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
    });
  </script>

          <!-- <p>The creation of  <b  style="color:#9EB384;">InsideOut </b> in 2023 was driven by the need for more accessible resources in finding psychologists, recognizing the crucial importance of mental health.
            InsideOut has since become a valuable platform, connecting individuals with top psychologists in Kosovo.
            Through this initiative, we aim to make a positive impact on society.
              InsideOut facilitates swift connections with the best psychologists, prioritizing the well-being of individuals. Additionally, the platform strives to make therapy more accessible by offering discounts to users.
  Our primary message is simple yet powerful: <br><b style="color:#435334;">'Your mental health is nothing to be ashamed of, and neither is talking about it.'</b> InsideOut is committed to breaking down barriers and fostering an environment where open conversations about mental health are encouraged and supported.</p>
   -->
 
    <?php
    // Assuming $aboutUsList is the result obtained from the getAllAboutUs method in your AboutUsRepository
    foreach ($aboutUsList as $aboutUsItem):
    ?>
  
        <div class="about">
            <img src="image/about.jpg" class="pic">
            <div class="text">
                <h2 style="color:#435334;"><?php echo $aboutUsItem['name']; ?></h2>
                <p><?php echo $aboutUsItem['description']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
  <?php include 'Include/footer.php'?>
  <script>
    const nav = document.querySelector(".nav"),
     navOpenBtn = document.querySelector(".navOpenBtn"),
     navCloseBtn = document.querySelector(".navCloseBtn");
   
   navOpenBtn.addEventListener("click", () => {
     nav.classList.add("openNav");
    
   });
   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
    });
  </script>


  