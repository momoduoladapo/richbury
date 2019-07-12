<!--==========================
      Services Section
    ============================-->
    <?php include('inc/products-array/bizdev-array.php'); ?>
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Business Development</h2>
        </div>

          <div class="row">
            <!--column one-->
            <?php foreach($bizdevs as $bizdev) { ?>
            <div class="col-lg-3">
              <div class="box wow fadeInLeft" delay="0.data-wow-2s">
                  <h4 class="title"><?php echo$bizdev['name']; ?></h4>
                  <img src="<?php echo$bizdev['image']; ?>" alt="<?php echo$bizdev['name']; ?>" class="img-fluid">
                  
                  <a href="create-account.php">Apply Now</a>
              </div>
            </div>
            <?php } ?>
       

          </div>

      </div>
    </section><!-- #services -->