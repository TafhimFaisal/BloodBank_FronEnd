<form action="" method="" id="changePassword_form">
    <input type="hidden" name="token" value="">
    <div class="container">
    
    <div class="row">
        
        <label for="prev_password" class="text-right col-md-2 col-form-label">Old Password:</label>
        <div class="col-md-10 input-group mb-3">
        <input type="password" id="prev_password" name="prev_password"  class="form-control" placeholder="Old Password.">
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
        </div>
        </div>

    </div>

    <div class="row">
        
        <label for="new_password" class="text-right col-md-2 col-form-label">New Password:</label>
        <div class="col-md-10 input-group mb-3">
        <input type="password" id="new_password" name="new_password"  class="form-control" placeholder="New Password.">
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
        </div>
        </div>

    </div>
    

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-10">
        <button type="button" id="change_password" class="btn btn-danger btn">Change password</button>
        </div>
    </div>

    </div>

</form>