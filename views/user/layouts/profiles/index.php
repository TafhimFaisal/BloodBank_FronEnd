<!-- start -->
<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
    
    <div class="card">

        <div class="card-header p-2">
        <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/profileButtons.php"; ?>
        </div>
        
        <div class="card-body">
        <div class="tab-content">

            <div class="active tab-pane" id="profile">
            <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/profile.php"; ?>
            </div>

            <div class="tab-pane" id="edit">
            <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/edit.php"; ?>
            </div>

            <div class="tab-pane" id="changePassword">
            <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/changePassword.php"; ?>
            </div>

            <div class="tab-pane" id="updateLastDonotionDate">
            <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/updateDonotionData.php"; ?>
            </div>
            
            <div class="tab-pane" id="donotionHistory">
                <?php include $_SERVER['DOCUMENT_ROOT']."/views/user/layouts/profiles/timeline.php"; ?>
            </div>
        
        </div>

        </div>
    </div>
    
    </div>
</div>
<!-- end -->