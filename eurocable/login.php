<?php
  @include 'navbar.php'
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
    <link rel="stylesheet" href="css/login4.css">
    <!--

EuroCable

-->
  </head>

  <body id="top">
    <main>
      
      
      <!-- SIGNUP MENU -->

      <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
              <form action="handleLogin.php" method="POST">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="username" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="password" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" name="submit" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
              </form>
                

                <!-- SIGNUP MENU -->

                <div class="sign-up-htm">
                  <div class="signup-form">
                    <?php
                    if(isset($error)){
                      foreach($error as $error){
                        echo '<p style="color: red;">'.$error.'</p>';
                        // echo '<span class="error-msg">'.$error.'</span>';
                      }
                    }
                    ?>
                    <form action="signup.php" method="post">
                      <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" name="name" type="text" class="input">
                      </div>
                      <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password">
                      </div>
                      <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" name="repeat_pass" type="password" class="input" data-type="password">
                     </div>
                      <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" name="email" type="text" class="input">
                      </div>
                      <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign Up">
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                      </div>
                     </div>
                    </form>
                    
                    
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
  </body>
</html>
