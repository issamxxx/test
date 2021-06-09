<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
   <?php
      if (isset($_SESSION['userUid'])) {
        require_once "headerSession.php";
      }
      else{require_once "header.html";}

   ?>
  <!-- End Header -->


  <!-- Hero Section  -->

  <section id="hero">
    <div class="hero container">
      <div>
          <br><br><br><br>
        <h1>welcome,  <span></span></h1>
        <h1>in <span></span></h1>
        <h1>OneTouch <span></span></h1><?php if (isset($_SESSION['userUid'])){
          echo "<h1>".$_SESSION['userUid']." <span></span></h1>"; } ?>
        <?php
      if (isset($_SESSION['userUid'])) {
        echo "
        <a href='http://localhost:5000/view' type='button' class='cta'>Get acces to desktop</a><br>
        <a href='http://localhost/MYproject/appinterface/interfaceclient.php' type='button' class='cta'>share my screen</a>";
      }
        else{
          echo "<a href='http://localhost/MYproject/signin.php' href='#projects' type='button' class='cta'>log in</a>";
      }
        ?>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->

  <!-- End Service Section -->



  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        

      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+212 ******</h2>
            <h2>+212 ******</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>issamhaji7@gmail.com</h2>
            <h2>issamjebrane65@gmail.com</h2>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>O</span>ne <span>T</span>ouch</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>

  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>
