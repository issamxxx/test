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

    
      <!-- Hero Section  -->

      <section id="hero">
    
        <div class="hero container">
          <p>you must start sharing from your app 
           (Codeboard Screen Cast) . </p>
          <img src="img/remote.jpg"></img>
          
        </div>
       
      </section>
      <!-- End Hero Section  -->
      <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>you can download (Codeboard Screen Cast) from this link :   </h2>

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

   <script src="./app.js"></script>
 </body>

 </html>
