
<?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/__head.php"; ?>

<body class="hold-transition login-page">

  <div class="login-box">

    <?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/login-logo.php"; ?>
    
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"> Enter and confirm your password </p>

        <form action="" method="post" class="change_password_form">
          <input type="hidden" id="token" name="token" value="<?= $_GET['token']?>">
          <input type="hidden" id="user_id" name="user_id" value="<?= $_GET['id']?>">
          <div class="input-group mb-3">
            <input type="password" id="recover_password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" id="recover_confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="button" id="reset_password_button" class="btn btn-primary btn-block">Change password</button>
            </div>
          </div>

        </form>

        
      </div>

    </div>
    
    <?php $message ="You are only one step a way from your new password, recover your password now."; include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/footer.php'; ?>
  </div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/__foot.php'; ?>
