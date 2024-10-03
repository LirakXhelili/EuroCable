<?php
  session_start();
  @include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>EuroCable</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/myAccount.css">
  </head>

  <body id="top">
    <main>
      <!-- Account Settings Section -->
      <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">Account settings</h4>
        <div class="card overflow-hidden">
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="account-general">
                <form method="POST" action="update_profile.php">
                  <div class="card-body media align-items-center">
                    <img
                      id="profile-picture"
                      src="https://bootdey.com/img/Content/avatar/avatar1.png"
                      alt
                      class="d-block ui-w-80"
                    />
                    <div class="media-body ml-4">
                      <label class="btn btn-outline-primary">
                        Upload new photo
                        <input
                          type="file"
                          class="account-settings-fileinput"
                          id="profile-picture-input"
                        />
                      </label>
                      &nbsp;
                      <button type="button" class="btn btn-default md-btn-flat" id="reset-picture">Reset</button>
                      <div class="text-light small mt-1">
                        Allowed JPG, GIF or PNG. Max size of 800K
                      </div>
                    </div>
                  </div>
                  <hr class="border-light m-0" />
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">Username</label>
                      <input
                        type="text"
                        class="form-control mb-1"
                        name="username"
                        value='<?php echo $_SESSION['username']; ?>'
                      />
                    </div>
                    <div class="form-group">
                      <label class="form-label">E-mail</label>
                      <input
                        type="email"
                        class="form-control mb-1"
                        name="email"
                        value='<?php echo $_SESSION['email']; ?>'
                      />
                    </div>
                    <div class="form-group">
                      <label class="form-label">Password</label>
                      <input
                        type="password"
                        class="form-control mb-1"
                        name="password"
                        placeholder="Enter new password (leave blank if not changing)"
                      />
                    </div>
                    <div class="alert alert-warning mt-3">
                      Your email is not confirmed. Please check your inbox.
                      <br />
                      <a href="javascript:void(0)">Resend confirmation</a>
                    </div>
                  </div>
                  <div class="butoni">
                    <button type="submit" class="btn btn-primary" name="save_changes">Save changes</button>
                    &nbsp;
                    <button type="button" class="btn btn-default">Cancel</button>
                  </div>
                </form>
              </div>
              <!-- Additional Account Sections Here -->
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php @include 'footer.php';?>
    

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/profile-picture.js"></script> <!-- Link to the external JS file -->
    <script src="js/myAccount.js"></script>
  </body>
</html>
