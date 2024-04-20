<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/1.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer the freshest, local, and ethically sourced eggs through convenient, 24/7 vending machines with a user-friendly app, for a seamless egg-buying experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Bre$mandy.jpg" alt="">
         <p>This egg vending machine is a lifesaver!  Living in a small town, the grocery store often runs out of eggs by the time I get off work.  This machine is always stocked with fresh, local eggs, and it's so convenient to be able to grab a dozen on my way home, no matter the time of day.  (Would recommend adding a little shelf for recipes or egg cartons!)</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bre&Mandy</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/mickey.jpg" alt="">
         <p>I love the concept of the egg vending machine!  It's so neat to be able to support local farmers directly.  The eggs I bought were delicious, and the machine itself was clean and easy to use.  However, I wish there was a way to see what the "sell by" date was before purchasing.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mickey Group</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/ccpacademy.jpg" alt="">
         <p>The idea is there, but the execution needs some work.  The machine jammed a bit when I tried to get my eggs, and it took a few tries to get my money back.  Hopefully, this was just a one-time thing, but it was a bit frustrating.  The eggs themselves seemed fine though.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ccp Academy</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>This egg vending machine on the side of the road is genius!  It's right next to a hiking trail I frequent, and it's the perfect pick-me-up after a long walk.  The eggs are always fresh and delicious, and the price is fair.  Plus, it's fun to see a vending machine offering something a little different.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rasta family</h3>
      </div>

      



   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>