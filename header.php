<?php
session_start();
?>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img  src="assets_theme1/img/courier.png" alt="">
        <!-- <h1>Logis</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <?php
          if (!isset($_SESSION['role'])){
            echo '
            <li><a href="about.php">About</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Packers & Movers</a></li>
                <li><a href="#">Courier services</a></li>
                <li><a href="#">Custom Clearing</a></li>
                <li><a href="#">Cargo Insurance</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a class="get-a-quote" href="login.php">Log In</a></li>
            ';

          }
          else {
            $user = $_SESSION["role"];
            if($user == "user"){
              echo '
              <li><a href="about.php">About</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Packers & Movers</a></li>
                  <li><a href="#">Courier services</a></li>
                  <li><a href="#">Custom Clearing</a></li>
                  <li><a href="#">Cargo Insurance</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
              <li><a class="get-a-quote" href="logout.php">Logout</a></li>
              ';
            }
          }
          ?>
          
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->