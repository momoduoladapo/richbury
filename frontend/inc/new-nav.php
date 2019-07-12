  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:info@richburyinvestment.com">info@richburyinvestment.com</a>
        <i class="fa fa-phone"></i> +234 703 799 4489
      </div>
      <div class="contact-info float-right">
        <i class="fa fa-sign-in"></i><a href="" data-toggle="modal" data-target="#loginSignUp">Login</a>
       <!-- <i class="fa fa-user-plus"></i><a href="create-account.php">Sign Up</a> -->
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

        

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo.jpg" alt="Official Logo of Richbury Investment Limited" title="Official Logo of Richbury Investment Limited" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="<?php if ($section == 'home') { echo 'menu-active';} ?>"><a href="index.php">Home</a></li>
          <li class="<?php if ($section == 'about') { echo 'menu-active';} ?>"><a href="about-us.php">About Us</a></li>
          <li class="menu-has-children <?php if ($section == 'services') { echo 'menu-active';} ?>"><a href="services.php">Services</a>
            <ul>
                <li><a href="business-development.php">Business Development</a></li>
                <li><a href="career-development.php">Career Development</a></li>
                <li><a href="property-development.php">Property Development</a></li>
                <li><a href="travel-tour-development.php">Travel & Tour Development</a></li>
            </ul>
          </li>
          <li class="menu-has-children <?php if ($section == 'services') { echo 'menu-active';} ?>"><a href="#">Grants</a>
            <ul>
                <li><a href="business-development.php">Business Grant</a></li>
                <li><a href="property-development.php">Housing Fund Delivery</a></li>
                <li><a href="travel-tour-development.php">Travel & Tour Finance</a></li>
                <li><a href="career-development.php">Scholarship / Education Grant</a></li>
            </ul>
          </li>
          <li class="<?php if ($section == 'shop') { echo 'menu-active';} ?>"><a href="shop.php">Shop</a></li>
          <li class="<?php if ($section == 'fundplan') { echo 'menu-active';} ?>"><a href="funding-plan.php">Funding Plan</a></li>
          <li class="<?php if ($section == 'howitworks') { echo 'menu-active';} ?>"><a href="how-it-works.php">How It Works</a></li>
          <li class="<?php if ($section == 'contact') { echo 'menu-active';} ?>"><a href="contact-us.php">Contact Us</a></li>
          <li id="sideMenu"><span class="fa fa-navicon" id="sideMenuClosed"></span></li>
        </ul>

        <div id="sideMenuContainer">
            <h2>Quick Links</h2>
            <a href="#" title="Login"><span class="fa fa-bolt"></span></a>
            <a href="#" title="Faqs"><span class="fa fa-exclamation-circle"></span></a>
            <a href="#" title="Our Partners"><span class="fa fa-map"></span></a>
            <a href="#" title="Funding Plan"><span class="fa fa-info-circle"></span></a>
            <a href="#" title="Contact Us"><span class="fa fa-users"></span></a>
            <a href="#" title="Members"><span class="fa fa-camera"></span></a>
            <a href="#" title="Team"><span class="fa fa-commenting"></span></a>
            <a href="#" title="Offices"><span class="fa fa-heart"></span></a>
            <a href="#" title="Testimonials"><span class="fa fa-flag"></span></a>
            <a href="#" title="Terms & Condition"><span class="fa fa-question-circle"></span></a>
            <a href="#" title="chat"><span class="fa fa-glass"></span></a>
        </div>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->