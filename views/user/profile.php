<?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/__head.php"; ?>

<body class="hold-transition layout-top-nav">

  <div class="wrapper">

    <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/nav.php"; ?>
    <?php if(isset ($_GET['token'])){setcookie('token', $_GET['token'], time() + (86400 * 30) , "/");} ?>
    <div class="content-wrapper">

      <div class="content-header">
        <div class="container">

        </div>
      </div>

      <div class="content">
        <div class="container">
          <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/index.php"; ?>
        </div>
      </div>

    </div>

    <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/footer.php"; ?>
    
  </div>

</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/__foot.php"; ?>
