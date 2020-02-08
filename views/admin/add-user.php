<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__header.php"; ?>
  <body class="hold-transition sidebar-mini">
  
    <div class="wrapper">
      
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/navbar.php"; ?>
      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/sidebar.php"; ?>
      

            <div class="content-wrapper">

              <div class="content-header">
                <div class="container">
                    <span id="store_user_massege" style="height:10px;display:block;margin-botom:10px">  </span>
                </div>
              </div>

              <div class="content">
                <div class="container">
                
                    <!-- start -->
                    <div class="row">
                      <!-- /.col -->
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header p-2">
                            <ul class="nav nav-pills">
                              <li class="nav-item"><a class="nav-link active" href="#add_user" data-toggle="tab">Add User (Single)</a></li>
                              <li class="nav-item"><a class="nav-link" href="#edit" data-toggle="tab">Add User (Bulk)</a></li>
                            </ul>
                          </div><!-- /.card-header -->
                          
                          
                          <div class="card-body">
                            <div class="tab-content">

                              <div class="active tab-pane" id="add_user">
                                
                                <form class="form-horizontal" id="add_user_form" action='' method="post">
                                  <input type="hidden" name="token" value="">
                                  <div class="input-group form-group row">
                                    <label for="user_name" class="text-right col-md-2 col-form-label">Name:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" id="user_name" placeholder="Name">
                                      <div id="name_error"></div>
                                    </div>
                                  </div>
                                  <div class="input-group form-group row">
                                    <label for="user_email" class="text-right col-md-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" name="email" id="user_email" placeholder="Email" >
                                      <div id="email_error"></div>
                                    </div>
                                  </div>
                                  <div class="input-group form-group row">
                                    <label for="user_phone" class="text-right col-md-2 col-form-label">Phone:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="phone" id="user_phone" placeholder="Phone">
                                      <div id="phone_error"></div>
                                    </div>
                                  </div>
                                  <div class="input-group form-group row">
                                    <label for="user_address" class="text-right col-md-2 col-form-label">Location:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="address" id="user_address" placeholder="location..">
                                      <div id="address_error"></div>
                                    </div>
                                  </div>
                                  <div class="input-group form-group row">
                                    <label for="user_blood_group" class="text-right col-md-2 col-form-label">Blood Group:</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="blood_group" id="user_blood_group" placeholder="blood group">
                                        <option value="">Blood Group</option>
                                        <option value="A+">    A+  </option>
                                        <option value="B+">    B+  </option>
                                        <option value="AB+">   AB+ </option>
                                        <option value="O+">    O+  </option>
                                        <option value="A-">    A-   </option>
                                        <option value="B-">    B-   </option>
                                        <option value="AB-">   AB-  </option>
                                        <option value="O-">    O-   </option>
                                      </select>
                                      <div id="blood_group_error"></div>
                                    </div>
                                  </div>

                                  <div class="input-group form-group row">
                                    <label for="user_donotion_date" class="text-right col-md-2 col-form-label">Latest Donotion Date:</label>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" name="latest_donotion_date" id="user_donotion_date" placeholder="blood group">
                                      <div id="latest_donotion_date_error"></div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="user_password" name="password" value="secret">
                                  <div class="input-group form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                      <button type="button" id="store_user" class="btn btn-danger">Submit</button>
                                    </div>
                                  </div>

                                </form>
                               
                                
                              </div>

                              <div class="tab-pane" id="edit">
                                
                                <div class="container">

                                  
                                  <div class="custom-file">
                                    <input type="file" id="input_file" accept=".xls,.xlsx,.ods" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                  </div>
                                  <span id="file_upload_massage" style="height:50px;display:block;margin-top:10px">
                                    
                                  </span>

                                </div>

                              </div>
                            </div>

                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <!-- end -->


                </div>
              </div>

            </div>


            <!-- ------ -->

          
        

      

      <?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/footer.php"; ?>
     
    </div>

  </body>
<?php require $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/__foot.php"; ?>
  