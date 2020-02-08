<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__header.php"; ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/navbar.php"; ?>
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/sidebar.php"; ?>
      

      <div class="content-wrapper">

        <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/content-header.php"; ?>
        
        <div class="content">
          <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/donorsList.php"; ?>
        </div>

      </div>

     

      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/footer.php"; ?> 
    </div>

  </body>
<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__foot.php"; ?>
  