
<?php session_start();
include 'Include/header3.php';
// include 'psychologist.php'
?>

<section class="psychologist" id="psychologist">
    <div class="heading">
        <h1>OUR PSYCHOLOGIST</h1>
        <p>These are among the most successful psychologists in Kosovo who cooperate with <i>InsideOut</i></p>
    </div>
    <div class="box-container">
    <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "InsideOut";

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select psychologists from the database
$sql = "SELECT id, name, type, img FROM Psychologist";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // HTML structure for each psychologist
        echo '<div class="box">
                <img src="' . htmlspecialchars($row["img"]) . '" alt="">
                <span><b>' . htmlspecialchars($row["name"]) . '</b></span><br>
                <span>' . htmlspecialchars($row["type"]) . '</span>
              </div>';
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

    </div>
</section>

 <!-- section starts-->
 <!-- <section class="psychologist" id="psychologist">
    <div class="heading">
        <h1 >OUR PSYCHOLOGIST</h1>
        <p>These are among the most successful psychologists in Kosovo who cooperate with <i>InsideOut</i></p> 
    </div>
  <div class="box-container">
      <div class="box">
          <img src="image/PetritThaqi.jpeg" alt="">
          <span><b>Petrit Thaqi</b></span><br>
          <span>Psikolog dhe Psikoterapeut</span>
          <span>Prishtine</span>
          <div class="share">
              <a href="https://www.facebook.com/trajtimpsikologjik/" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-instagram-original"></a>
              <a href="#" class="lni lni-linkedin-original"></a>
          </div>
      </div>

      <div class="box">
        <img src="image/Brikena.jpeg" alt="">
          <span><b>Brikena Hoti</b></span><br>
          <span>Psikologe Klinike </span>
          <span>Prishtine</span>
          <div class="share">
              <a href="https://www.facebook.com/brikenakrasniqipsikoterapeute" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-instagram-original"></a>
              <a href="#" class="lni lni-linkedin-original"></a>
          </div>
      </div>
      <div class="box">
        <img src="image/Gentiana Kuqi.jpeg" alt="">
        <span><b>Gentiana Kuqi</b></span><br>
          <span>Keshillim dhe Psikoterapi individuale per adoloshente dhe te rritur.</span>
          <span>Prishtine</span>
          <div class="share">
              <a href="https://www.facebook.com/psikologeklinikegentiana" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-instagram-original"></a>
              <a href="#" class="lni lni-linkedin-original"></a>
          </div>
      </div>
      <div class="box">
        <img src="image/Imri Zabeli .jpeg" alt="">
        <span><b> <br> Imri Zabeli</b></span><br>
          <span>Shërbime Specialistike</span>
          <span>Prishtine</span>
          <div class="share">
              <a href="https://www.facebook.com/psikologimrizabeli" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-instagram-original"></a>
              <a href="#" class="lni lni-linkedin-original"></a>
          </div>
      </div>
      <div class="box">
        <img src="image/Andi Petro.jpeg" alt="">
        <span><b> <br> Andi Petro</b></span><br>
          <span>Psikolog dhe Psikoterapeut</span>
          <span>Ferizaj</span>
          <div class="share">
              <a href="#" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-instagram-original"></a>
              <a href="#" class="lni lni-linkedin-original"></a>
          </div>
      </div>
      <div class="box">
        <img src="image/mimozasylaj.jpeg" alt="">
        <span><b> <br>Mimoza Sylaj</b></span><br>
          <span>Psikolog dhe Psikoterapeut</span>
          <span>Prishtine</span>
          <div class="share">
              <a href="https://www.facebook.com/profile.php?id=100082996081465" class="lni lni-facebook-original"></a>
              <a href="#" class="lni lni-twitter-original"></a>
              <a href="https://www.instagram.com/psikologe__mimozasylaj/" class="lni lni-instagram-original"></a>
          </div>
      </div>
  </div>
</section> -->

<!-- section ends-->
  
<?php include 'Include/footer.php'?>

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