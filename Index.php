<?php 
session_start();
include 'Include/header.php';
include_once 'database/DatabaseConnection.php';
include_once 'repository/serviseRepository.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

  <!--about us -->
  <section class="about-us">
    <div class="about">
      <img src="image/aboutUs.jpg" class="pic">
      <div class="text">
        <h2 style="color:#435334;">InsideOut</h2>
        <h5>Online therapy & <span>Designer</span></h5>
          <p>Join over 1,000 people who decided to get help and get happy with InsideOut.</p>
        <div class="data">
        <a href="about.php" class="hire">Read more</a>
        </div>
      </div>
    </div>
  </section>
<!-- sercives-->

<!--  -->

<section id="services" class="services-section">
    <h2 class="section-heading">Our Services</h2>
    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="column">
                <div class="card">
                    <h3><?php echo $service['name']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- slide-wrapper -->
<div class="container">
  <div class="slider-wrapper">
    <button id="prev-slide" class="slide-button material-symbols-rounded">
      <
    </button>
    <ul class="image-list">
      <img class="image-item" src="image/slider5.jpeg" alt="img-4" />
      <img class="image-item" src="image/slider4.jpeg" alt="img-1" />
      <img class="image-item" src="image/slider2.jpg" alt="img-2" />
      <img class="image-item" src="image/slider3.jpeg" alt="img-3" />
      <img class="image-item" src="image/slider6.jpeg" alt="img-5" />
      <img class="image-item" src="image/slider7.jpeg" alt="img-4" />
      <img class="image-item" src="image/slider8.jpeg" alt="img-1" />
      <img class="image-item" src="image/slider2.jpg" alt="img-2" />
      <img class="image-item" src="image/slider5.jpeg" alt="img-3" />
      <img class="image-item" src="image/slider6.jpeg" alt="img-5" />
    </ul>
    <button id="next-slide" class="slide-button material-symbols-rounded">
      >
    </button>
  </div>
  <div class="slider-scrollbar">
    <div class="scrollbar-track">
      <div c  ass="scrollbar-thumb"></div>
    </div>
  </div>
</div>
<!-- slide-wrapper end -->

<!--icons section start-->
<section class="icons-container">

  <div class="icons">
      <i class="lni lni-user"></i>
      <h3>6+</h3>
      <p>Therapist at work</p>
    </div>

    <div class="icons">
        <i class="lni lni-users"></i>
        <h3>100+</h3>
        <p>Satisfied klients</p>
    </div>

    <div class="icons">
        <i class="lni lni-home"></i>
        <h3>8+</h3>
        <p>City</p>
    </div>

    <div class="icons">
        <i class="lni lni-heart"></i>
        <h3>80+</h3>
        <p>Solved cases</p>
    </div>
</section>
<!--icon section end-->

<!-- footer -->
<?php include 'Include/footer.php' ?>

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
    
  //  slidershow

  // initSlider do të thirret në fillim për të konfiguruar dhe inicializuar elementët dhe parametrat e nevojshëm për slider-in.
    const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    
  //  kur klikojm ikonen me maus atehere ekzekutohet ky kod ne baze te levizjes te mausit

    scrollbarThumb.addEventListener("mousedown", (e) => {

        const startX = e.clientX; //pozita fillestare
        const thumbPosition = scrollbarThumb.offsetLeft;//i jep hapesir ne anen e majt
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;//kjo na ndihmon qe edhe kur te prekim na next te fotot mos me na ndrru width edhe me e marr gjith te njejt hapesiren edhe e merr hapesiren maksimale qe mundet
        

        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX; 
            const newThumbPosition = thumbPosition + deltaX;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }


        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }


        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });


    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }


    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }


    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);
    </script>
