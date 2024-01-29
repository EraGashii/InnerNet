<?php session_start();
include 'Include/header1.php'?>
  <section class="about-us">
    <div class="about">
      <img src="image/about.jpg" class="pic">
      <div class="text">
        <h2 style="color:#435334;"> About InsideOut</h2>
        <p>The creation of  <b  style="color:#9EB384;">InsideOut </b> in 2023 was driven by the need for more accessible resources in finding psychologists, recognizing the crucial importance of mental health.
           InsideOut has since become a valuable platform, connecting individuals with top psychologists in Kosovo.
           Through this initiative, we aim to make a positive impact on society.
            InsideOut facilitates swift connections with the best psychologists, prioritizing the well-being of individuals. Additionally, the platform strives to make therapy more accessible by offering discounts to users.
Our primary message is simple yet powerful: <br><b style="color:#435334;">'Your mental health is nothing to be ashamed of, and neither is talking about it.'</b> InsideOut is committed to breaking down barriers and fostering an environment where open conversations about mental health are encouraged and supported.</p>
          <!-- <p>The creation of <b style="color:#9EB384;">InsideOut</b> happened due to the lack of resources for finding psychologists. As we all know, mental health is as important as physical health. InsideOut was created in 2023 with the aim of making a difference in society. InsideOut has helped a lot people today to make a difference in their lives. InsideOut offers users faster contact with the best psychologists in Kosovo and offers discounts for therapy. 
            InsideOut's main goal is to let them know that <br><b style="color:#435334;">YOUR MENTAL HEALTH IS NOTHING TO BE ASHAMED OF AND NEITHER IS TALKING ABOUT IT.</b></p> -->
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
    //  searchIcon.classList.replace("uil-times");
   });
   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
    });
  </script>
