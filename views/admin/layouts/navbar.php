<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          
          <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-user"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              
              <a id="logout" href="#" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> LogOut
              </a>
              <div class="dropdown-divider"></div>
              <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/admin/profile.php" class="dropdown-item">
                <i class="fas fa-user mr-2"></i>Profile
              </a>

            </div>
          </li>

    </ul>
</nav>
