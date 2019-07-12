<?php
$pageTitle = "About Us";
$section = "about";

include('inc/header.php');
?>

<body id="body">

  <?php include('inc/new-nav.php') ?>


  <?php include('inc/inner-slides.php') ?>

  <main id="main">
    
    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
      <div class="section-header">
          <h2>About Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 content">
            <p>Richbury Investment Limited was incorporated on the 25th day of September 2001. The company directors are seasoned Career, Business and Property Developers with experience over decades. At Richbury, we encourage, prepare and support you to push the limits and break barriers militating against your dreams and visions. As investors in visionaries, we bring to your doorstep-professionalism with integrity and performance at par with promise as we provide you business, career and property development services through, vocational training, business plan preparation, review, training and financing, school placement, scholarship and housing fund delivery.</p>
          </div>

          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </section><!-- #about -->


    <?php include('inc/services-widget.php') ?>

    <?php include('inc/team.php') ?>

    <?php include('inc/testimonials.php') ?>

    <?php include('inc/call-to-action.php') ?>


  </main>

 <?php include('inc/footer.php') ?>
