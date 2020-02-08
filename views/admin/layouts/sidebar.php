<aside class="main-sidebar sidebar-light-primary elevation-4">
      
        <a href="index3.html" class="brand-link">
          <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/bs-logo.png" alt="BS-23 Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">BS-23 BloodBank</span>
        </a>

        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="http://<?=$_SERVER['HTTP_HOST']?>/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block admin-name">Admin</a>
            </div>
          </div>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
              <li class="nav-item">
                <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/admin/index.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    DashBord
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/admin/add-user.php" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Add User
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="http://<?=$_SERVER['HTTP_HOST']?>/views/admin/users-list.php" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>
                    Users List
                  </p>
                </a>
              </li>

            </ul>
          </nav>
        </div>
      </aside>