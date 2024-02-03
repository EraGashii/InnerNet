
<?php session_start();
include './repository/psychologistRepository.php';
include 'Include/header3.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologist Details</title>


</head>
<body>
<section>
<br><br>
<div class="psychologists-section">
   <br><br>
    <h2 class="section-title">Our Psychologists</h2>
    <br>
    <div class="box-container">
    <?php foreach ($psychologist as $psychologist): ?>
        <div class="psychologist">
            <?php $relativePath = "image/" . basename($psychologist['img']); ?>
            <img src="<?php echo $relativePath; ?>" alt="<?php echo $psychologist['name']; ?>">
            <div class="psychologist-content">
                <h3 class="psychologist-name"><?php echo $psychologist['name']; ?></h3>
                <p class="psychologist-type"><?php echo $psychologist['type']; ?></p>
                <div class="share">
                    <a href="https://www.facebook.com/trajtimpsikologjik/" class="lni lni-facebook-original"></a>
                    <a href="#" class="lni lni-instagram-original"></a>
                    <a href="#" class="lni lni-linkedin-original"></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
 </div>
</div>
</section>

</body>
</html>
  
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