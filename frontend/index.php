<?php
$pageTitle = "Home";
$section = "home";

include('inc/header.php');
?>

<body id="body">

  <?php include('inc/new-nav.php') ?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Get Funding for <span>your dreams</span><br>to come true!</h2>
      <div>
        <a href="services.php" class="btn-get-started scrollto">Apply Now</a>
        <a href="funding-plan.php" class="btn-projects scrollto">Learn More</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
    <?php include('inc/call-to-action.php') ?>
    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="welcome-address">
          <h1>Welcome to richbury investment limited</h1>
        </div>
        <div class="row">
          <div class="col-lg-6 content">
            <p>Hello there! Richbury investment limited welcomes you to this platform. At Richbury, we encourage, prepare and support you to push the limits and break barriers militating against your dreams and visions. As investors in visionaries, we bring to your doorstep-professionalism with integrity and performance at par with promise as we provide you business, career and property development services through, vocational training, business plan preparation, review, training and financing, school placement, scholarship and housing fund delivery. So relax…look no further.. Richbury is it!!!…whatever the event… whenever the occasion… wherever you are… remember… “Only the uninformed are in debt… at Richbury…we’re fond of funding you.</p>
          </div>

          <div class="col-lg-6 content">
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Place your children on upto Five Hundred Thousand Naira Richbury Scholarship. To be paid to your child's school in instalment term by term for the next 2 to 5 years... <a href="#">Read More</a></li>
              <li><i class="ion-android-checkmark-circle"></i> Got Business Ideas? Need Investors or a Grant (Free capital or interest-free loan) to start or expand your business?... <a href="business-development.php">Read More</a></li>
              <li><i class="ion-android-checkmark-circle"></i> Start locally, finish abroad on upto Three Million Naira Richbury Scholarship... <a href="#">Read More</a></li>
              <li><i class="ion-android-checkmark-circle"></i> Access upto Thirty-Six Million Naira Housing Fund and repay in 5-10yrs without interest... <a href="#">Read More</a></li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <?php include('inc/services-widget.php') ?>

    <?php include('inc/testimonials.php') ?>

  </main>

 <?php include('inc/footer.php') ?>
