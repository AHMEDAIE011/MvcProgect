  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Day</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>

          <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php

use APP\Models\Service;

$services = Service::all();
            foreach ($services as $service) {?> 
            <li><a href="Product-page?service_id=<?php echo $service->id; ?>"> <?php echo $service->name; ?> </a></li>
            <?php }?>
             </ul>
          </li>
          <?php if (app()->session->exists('user') == true) { ?>
          <li class="dropdown"><a href="#"><span><?php UserGetName(); ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/dashboard">Dashboard</a></li>
              <li><a href="/profile">Profile</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          <?php } else {?>
            <li><a class="nav-link scrollto" href="login">Login</a></li>
            <li><a class="nav-link scrollto" href="register">Register</a></li>
            <?php }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
