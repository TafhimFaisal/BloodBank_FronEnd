<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__header.php"; ?>
  <body class="hold-transition sidebar-mini">
  
    <div class="wrapper">
      
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/navbar.php"; ?>
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/sidebar.php"; ?>
      

      <div class="content-wrapper">

        <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/content-header.php"; ?>
        
        <div class="content">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <table id="user-information-table" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Blood Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/footer.php"; ?>
      
    </div>
  
    
    
    <!-- Modal -->
      <div class="modal fade" id="profile_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="card-body box-profile">
                                       
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Name :</b> <a class="float-right"><span class="profile-name"></span></a>
                </li>
                <li class="list-group-item">
                  <b>Blood Group :</b> <a class="float-right"><span class="profile-bg"></span></a>
                </li>
                <li class="list-group-item">
                  <b>Email :</b> <a class="float-right"><span class="profile-email"></span></a>
                </li>
                <li class="list-group-item">
                  <b>Phone :</b> <a class="float-right"><span class="profile-phone"></span></a>
                </li>
                <li class="list-group-item">
                  <b>Address :</b> <a class="float-right"><span class="profile-address"></span></a>
                </li>
                <li class="list-group-item">
                  <b>Role :</b> <a class="float-right"><span class="profile-role"></span></a>
                </li>
              </ul>
              
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal -->

    <!-- Modal -->
      <div class="modal fade" id="edit_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <!-- --- -->
                  <input type="hidden" name="id" id="user_id">
                  <div class="form-group row">
                    <label for="user_Name" class="text-right col-md-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="user_Name" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="user_email" class="text-right col-md-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="user_email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="user_phone" class="text-right col-md-2 col-form-label">Phone:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" id="user_phone" placeholder="Phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="user_location" class="text-right col-md-2 col-form-label">Location:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="address" id="user_location" placeholder="location">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="user_BloodGroup" class="text-right col-md-2 col-form-label">BG:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="blood_group" id="user_BloodGroup" placeholder="blood group">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="user_BloodGroup" class="text-right col-md-2 col-form-label">role:</label>
                    <div class="col-sm-10">
                      <div class="input-group mb-3">
                        <select name="role" id="user_role" class="custom-select" id="inputGroupSelect02">
                          <option selected>Choose.</option>
                          <option id="admin" value="admin">admin</option>
                          <option id="user" value="user">user</option>
                        </select>
                      </div>
                    </div>
                  </div>
              <!-- --- -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onClick="window.location.reload();" data-dismiss="modal">Close</button>
              <button type="button" id="update_profile" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal -->

    <!-- Modal -->
      <div class="modal fade" id="password_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="container">
              <div id="massage"></div>
                <div class="row">
                  <div class="col-md-12 input-group mb-3">
                    <input type="hidden" name="id" id="user_id_changepass">
                    <input type="password" id="user_password" name="password"  class="form-control" placeholder="New Password.">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onClick="window.location.reload();" data-dismiss="modal">Close</button>
              <button type="button" id="update_password" class="btn btn-danger">Save</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal -->
  </body>
<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__foot.php"; ?>
