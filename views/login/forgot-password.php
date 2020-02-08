
<?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/__head.php"; ?>

<body class="hold-transition login-page">

  <div class="login-box">

    <?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/login-logo.php"; ?>
    
    <div class="card">

      <div class="card-body login-card-body">

        <p class="login-box-msg"> A reset link will be sent to you email id. </p>
        
          <form class='request_for_change_password_form' action="">
            <div class="input-group mb-3">

              <input type="email" name="email" id="recovery_emailID" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>

            </div>
            
            <div class="row">
              <div class="col-12">
                <button type="button" id="request_new_password" class="btn btn-primary btn-block">Request new password</button>
              </div>
            </div>

          </form>


      </div>

    </div>

    <?php $message = "You forgot your password? Here you can easily retrieve a new password."; include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/footer.php'; ?>
  </div>
  
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/__foot.php'; ?>

