<?php
session_start();
 include 'Include/header2.php'?>
    </nav>
  </header>
         <!-- contact Us -->

        <div class="container">
          <span class="big-circle"></span>
          <img src="image/shape.png" class="square" alt="" />
          <div class="form">
            <div class="contact-info">
              <h3 class="title">Let's get in touch</h3>
              <p class="text">
              Your deserve to heal
              </p>
              <div class="info">
                <div class="information">
                  <img src="image/location.png" class="icon" alt="" />
                  <p>Kline</p>
                </div>
                <div class="information">
                  <img src="image/email.png" class="icon" alt="" />
                  <p>InsideOut@gmail.com</p>
                </div>
                <div class="information">
                  <img src="image/phone.png" class="icon" alt="" />
                  <p>044-489-488</p>
                </div>
              </div>
              <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
            <form action="contact-form.php" method="post" autocomplete="off">
            <div class="contact-form">
              <span class="circle one"></span>
              <span class="circle two"></span>
              <!-- <form action="index.html" autocomplete="off"> -->
                <h3 class="title" >Contact us</h3>
                <div class="input-container">
                  <input type="text" name="name" class="input" placeholder="Username" required />
                </div>
                <div class="input-container">
                  <input type="email" name="email" class="input" placeholder="Email" required />
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" class="input" placeholder="Phone" required />
                </div>
                <div class="input-container textarea">
                  <textarea name="message" class="input" placeholder="Message" required></textarea>
                </div>
                <input type="submit" value="Send" class="btn" />
              <!-- </form> -->
            </div>
          </div>
        </div>
</form>

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
    
    // contact us
    const form = document.getElementById('contact-form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const Username = form.elements.username.value;
  const email = form.elements.email.value;
  const phone=form.elements.phone.value;
  const message = form.elements.message.value;
});
    </script>

