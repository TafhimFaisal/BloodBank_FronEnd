<?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/__head.php"; ?>

<body class="hold-transition login-page">

  <div class="login-box">
    <?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/login-logo.php"; ?>

    <div class="card">

      <div class="card-body login-card-body">

        <form class = "mt-5" action="" method="get">
          <input type="hidden" value="redirect_page" name="redirect_page" value="admin">
          <div class="input-group mb-3">
            <input type="email" id="email_id" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" id="submit_password" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-8"></div>
            <div class="col-4">
              <button type="button" id="login" class="btn btn-primary btn-block">Sign In</button>
            </div>

          </div>

        </form>
        
      </div>
      
    </div>
    <?php $message = "Enter your email password to logIn"; include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/footer.php'; ?>
  </div>
  
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/__foot.php'; ?>

