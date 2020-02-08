<div class="container">
    <form class="form-horizontal" action='' method="post">
    <!-- <input type="hidden" name="_method" value="put"> -->
    <input type="hidden" name="token" value="">
    <div class="form-group row">
        <label for="Name" class="text-right col-md-2 col-form-label">Name:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="text-right col-md-2 col-form-label">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="text-right col-md-2 col-form-label">Phone:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>
    </div>
    <div class="form-group row">
        <label for="location" class="text-right col-md-2 col-form-label">Location:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="address" id="location" placeholder="location..">
        </div>
    </div>
    <div class="form-group row">
        <label for="BloodGroup" class="text-right col-md-2 col-form-label">Blood Group:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="blood_group" id="BloodGroup" disabled placeholder="blood group">
        </div>
    </div>
    
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
        <button  type="button" id="submit_updated_profile" class="btn btn-danger">Submit</button>
        </div>
    </div>

    </form>

</div>