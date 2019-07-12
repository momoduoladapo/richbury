<!-- Login Modal -->
<div class="modal fade bs-example-modal-sm" id="loginSignUp" tabindex="-1" role="dialog" aria-labelledby="loginSignUpLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginSignUpLabel">Enter Login Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="username" class="form-control" id="name" placeholder="Enter Your Username*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-12">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password*" data-rule="password" data-msg="Please enter at least 6 chars" />
                    <div class="validation"></div>
                </div>
            </div>
            <p><a href="#" style="text-align:center;">Forgot Password</a></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Proceed</button>
        </div>
      </form>
    </div>
  </div>
</div>