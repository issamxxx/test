
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>O</span>ne <span>T</span>ouch</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="http://localhost/MYproject/includes/logout.inc.php"  style="color:Tomato;">Logout</a></li>
            <?php
                echo "<li><p style='color:White;font-size:14px;'>".$_SESSION['userUid']."</p></li>";
              ?>

          </ul>
        </div>
      </div>
    </div>
  </section
