<?php include 'Include/header1.php'?>
  <section class="about-us">
    <div class="about">
      <img src="image/about.jpg" class="pic">
      <div class="text">
        <h2 style="color:#435334;"> About InsideOut</h2>
          <p>The creation of <b style="color:#9EB384;">InsideOut</b> happened due to the lack of resources for finding psychologists. As we all know, mental health is as important as physical health. InsideOut was created in 2023 with the aim of making a difference in society. InsideOut has helped a lot people today to make a difference in their lives. InsideOut offers users faster contact with the best psychologists in Kosovo and offers discounts for therapy. 
            InsideOut's main goal is to let them know that <br><b style="color:#435334;">YOUR MENTAL HEALTH IS NOTHING TO BE ASHAMED OF AND NEITHER IS TALKING ABOUT IT.</b></p>
      </div>
    </div>
  </section>
  <?php include 'Include/footer.php'?>
  
<script>
    const nav = document.querySelector(".nav"),
     navOpenBtn = document.querySelector(".navOpenBtn"),
     navCloseBtn = document.querySelector(".navCloseBtn");
   
   navOpenBtn.addEventListener("click", () => {
     nav.classList.add("openNav");
     searchIcon.classList.replace("uil-times");
   });
   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
    });
  </script>
