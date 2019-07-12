<?php
$pageTitle = "Contact Us";
$section = "contact";

include('inc/header.php');
?>

<body id="body">

  <?php include('inc/new-nav.php') ?>


  <?php include('inc/inner-slides.php') ?>

  <main id="main">
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Thanks for visiting our website. You can use the contact form below to get in touch with us and we will be there to respond as soon as possible.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>2, Osho Street, Opebi Ikeja, Lagos Nigeria.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+2347037994489">+234 703 799 4489</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@richburyinvestment.com">info@richburyinvestment.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4307452754806!2d3.3593272147438564!3d6.593263924177628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9240d0bd909b%3A0xab90f63dfaa9eb6b!2sOsho+St%2C+Ikeja!5e0!3m2!1sen!2sng!4v1560878166853!5m2!1sen!2sng" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

    <?php include('inc/call-to-action.php') ?>


  </main>

 <?php include('inc/footer.php') ?>