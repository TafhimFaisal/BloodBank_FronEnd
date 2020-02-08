<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">

      <div class="container">
        
        <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/user/index.php" class="navbar-brand">
          <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/bs-logo.png" alt="BrainStation-23 Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">BrainStation-23 BloodBank</span>
        </a>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          
          <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-user"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="position:absolute !important">
            <!-- style="position:absolute !important" -->
              <a id="logout" href="#" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> LogOut
              </a>
              <div class="dropdown-divider"></div>
              <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/user/profile.php" class="dropdown-item">
                <i class="fas fa-user mr-2"></i>Profile
              </a>

            </div>
          </li>

        </ul>

      </div>

    </nav>
