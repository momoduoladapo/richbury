<?php require('phpMysql/signup-handling.php') ?>
<!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Signup / Login</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 content">
                <div class="box wow fadeInLeft" delay="0.data-wow-2s">
                    <div class="form">
                        <p>All fields marked asterix (<strong>*</strong>) must be filled.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-md-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <input type="text" name="username" class="form-control" placeholder="Create Username*" value="<?php echo $username; ?>"/>
                                    <span class="help-block"><?php echo $username_err; ?></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password*" value="<?php echo $password; ?>"/>
                                    <span class="help-block"><?php echo $password_err; ?></span>
                                </div>
                                <div class="form-group col-md-6 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Your password*" value="<?php echo $confirm_password; ?>"/>
                                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                               <!-- <a href="#">Create Account</a> -->
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 content">
                <div class="box wow fadeInLeft" delay="0.data-wow-2s">
                    <div class="form">
                        <p>All fields marked asterix (<strong>*</strong>) must be filled.</p>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="name" placeholder="Enter Username or E-mail*" data-rule="minlen:4" data-msg="Please enter username or email to login" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Your Password*" data-rule="password" data-msg="Please enter password" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <a href="#" class="login-btn">Login</a>
                                </div>
                                <div class="form-group col-md-4">
                                    <a href="forgot-password.php" class="forgot-pass-btn">Forgot Password</a>
                                </div>
                            </div>
                                  
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

      </div>
    </section><!-- #services -->







