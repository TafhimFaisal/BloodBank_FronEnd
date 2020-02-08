<?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/__head.php"; ?>

<body class="hold-transition lockscreen">
  
  <div class="lockscreen-wrapper">

    <?php include $_SERVER['DOCUMENT_ROOT']."/views/login/layouts/login-logo.php"; ?>

    <div class="row">
      
      <div id="email" class=" col-md-12">
        <div class="lockscreen-item">
    
          <div class="lockscreen-image">
            <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/at.png" alt="User Image">
          </div>
    
          <form class="lockscreen-credentials">
            <div class="input-group">
              <input type="email" id="email_id" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <button type="button" id="next" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
              </div>
            </div>
          </form>
          
        </div>
      </div>

      <div id="loader" class=" col-md-12">
          <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/loader/loader2.gif" style="margin:0px 99px">
      </div>

      <div id="email_send_massage" class=" col-md-12">
          <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/email-send.gif" style="margin: -70px -50px;">
      </div>
      
      <div id="password" class="col-md-12">
        <div class="lockscreen-item">
    
          <div class="lockscreen-image">
            <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/user.png" alt="User Image">
          </div>
    
          <form class="lockscreen-credentials">
            <input type="hidden" value="user" id="redirect_page" name="redirect_page">
            <div class="input-group">
              <input type="password" id="submit_password" name="password" class="form-control" placeholder="password">
              <input type="hidden" id="submit_email" name='email'>
              <div class="input-group-append">
                <button type="button" id="login" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
              </div>
            </div>
          </form>
    
        </div>
      </div>

    </div>
    
    <?php $message = "Enter your email id to logIn"; include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/footer.php'; ?>

  </div>
    
</body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/login/layouts/__foot.php'; ?>

