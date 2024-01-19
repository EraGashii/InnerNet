<?php include 'Include/header3.php'?>

 <!--doctors section starts-->
 <section class="psychologist" id="psychologist">
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
</section>

<!--doctors section ends-->
  
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