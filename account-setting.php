<?php include 'parts/modals.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings - Imagn</title>
    <link href="fucking-css/bootstrap.css" rel="stylesheet">
    <link href="fucking-css/main.css" rel="stylesheet">
    <link href="fucking-css/responsive.css" rel="stylesheet">
    <link href="fucking-css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="webfonts/stylesheet.css" rel="stylesheet">
    
    <link rel="stylesheet" href="webfonts/stylesheet.css" type="text/css" charset="utf-8" />







</head>

<body>

    <?php include 'include/navbar1-after-login.php';?>
    <div class="supreme-container">

        <section class="profile-settings-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left mb-4 my-4">
                            <h1>Account Settings</h1>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-bs-toggle="list" href="#list-general" role="tab" aria-controls="general"><i
                                            class="fas fa-cog"></i> General</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-bs-toggle="list" href="#list-security" role="tab"
                                        aria-controls="security"><i class="fas fa-key"></i> Security and
                                        login</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list"
                                        data-bs-toggle="list" href="#list-privacy" role="tab" aria-controls="privacy"><i
                                            class="fas fa-user-shield"></i> Privacy</a>

                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-general" role="tabpanel"
                                        aria-labelledby="list-general-list">
                                        <div class="card">
  <div class="card-body">
  <form class="row g-3">
  <div class="col-md-6">
    <label for="first-name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="first-name">
  </div>
  <div class="col-md-6">
    <label for="last-name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="last-name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="website" class="form-label">Website</label>
    <input type="text" class="form-control" id="website">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Gender</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Open list to select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="occupation" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="occupation">
  </div>
  <div class="col-md-6">
    <label for="dob" class="form-label">Date of Birth</label>
    <div class="input-group mb-3">
  
  <input class="form-control datepicker" data-date-format="mm/dd/yyyy">
  <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
</div>

  </div>
  <div class="col-md-6">
    <label for="occupation" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="occupation">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
  <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Details</button>
  </div>
</form>
  </div>
</div>
                                        </div>
                                    <div class="tab-pane fade" id="list-security" role="tabpanel"
                                        aria-labelledby="list-security-list">
                                     
                                        <div class="card">
  <div class="card-body">
  <form class="row g-3">
  <div class="col-md-12">
    <label for="current-password" class="form-label">Current Password</label>
    <input type="password" class="form-control" id="current-password">
  </div>
  <div class="col-md-6">
    <label for="new-password" class="form-label">Enter new password</label>
    <input type="password" class="form-control" id="new-password">
 </div>
  <div class="col-md-6">
    <label for="confirm-new-password" class="form-label">Confirm new password</label>
    <input type="password" class="form-control" id="confirm-new-password">
 </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Password</button>
  </div>
</form>
  </div>
</div>
                                        
                                        
                                        </div>
                                    <div class="tab-pane fade" id="list-privacy" role="tabpanel"
                                        aria-labelledby="list-privacy-list">
                                        
                                        <div class="card">
  <div class="card-body">
  <form class="row g-3">
  <div class="col-md-12">
    <label for="current-password" class="form-label">Who can view your posts</label>
    <select class="form-select" aria-label="Default select example">
 
  <option value="1">Everyone</option>
  <option value="2">Friends Only</option>
 
</select>
  </div>
  <div class="col-md-12">
    <label for="new-password" class="form-label">Notifications Email</label>
    
    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">We’ll send you an email to your account each time you receive a new activity notification</label>
</div>
 </div>
 <div class="col-md-12">
    <label for="new-password" class="form-label">Friend’s Birthdays</label>
    
    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</label>
</div>
 </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Settings</button>
  </div>
</form>
  </div>
</div>
                                        
                                        
                                        </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>








    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="fucking-js/bootstrap.bundle.js"></script>
<script src="fucking-js/bootstrap-datepicker.js" crossorigin="anonymous"></script>
<script src="fucking-js/custom.js"></script>
<script src="fucking-js/all.js"></script>
<script src="fucking-js/app.js"></script>
<script src="fucking-js/tag-input.js"></script>
<script>
 $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    
});
</script>