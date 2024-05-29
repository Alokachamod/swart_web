<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In/Sign Up Toggle</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="resources\profile for swart.jpg">
</head>

<body class="mainbody">
  <div class="container">
    <div class="row">
      <div class="mt-5 mb-3 text-center col-12">
        <p class=" title01 text-light">Hi, Welcome to SWART Industries</p>
      </div>
    </div>
    <?php

    if (!isset($_COOKIE['email']) or !isset($_COOKIE['password'])) {
      $_COOKIE['email'] = "";
      $_COOKIE['password'] = "";
    }
    ?>

    <!-- Sign Up Section -->
    <div class="row justify-content-center" id="signUpBox">
      <div class="col-12 col-lg-6">
        <div class="p-5 card">
          <p class="title">Register</p>
          <div class="col-12 d-none" id="msgdiv">
            <div class="alert alert-danger" role="alert" id="msg">

            </div>
          </div>
          <div class="d-flex justify-content-between">


            <div class="form-floating col-6 pe-3">

              <!-- First Name Input -->
              <input type="text" class="form-control" id="fname" placeholder="Aloka">
              <label for="fname">First Name</label>
            </div>
            <div class="form-floating col-6">
              <!-- Last Name Input -->
              <input type="text" class="form-control" id="lname" placeholder="Champathi">
              <label for="lname">Last Name</label>
            </div>
          </div>
          <div class="mt-3 col-12">
            <!-- Email Input -->
            <div class="mb-3 form-floating">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <!-- Password Input -->
            <div class="mb-3 form-floating">
              <input type="password" class="form-control" id="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <!-- Mobile Number Input -->
            <div class="form-floating">
              <input type="text" class="form-control" id="mobile" placeholder="mobile">
              <label for="number">Mobile Number</label>
            </div>
            <!-- Register Button -->
            <button type="button" class="mt-3 mb-1 text-white btn btn-info col-12" onclick="signup();">Register</button>
            <!-- Toggle to Login Section -->
            <p class="text-center">Already have an account ? <a href="#" onclick="changeView();">Log In</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Sign In Section -->
    <div class="row justify-content-center d-none " id="signInBox" >
      <div class="col-12 col-lg-6">
        <div class="p-5 card">
          <p class="title">Log in</p>
          <div class="col-12 d-none" id="msgdiv1">
            <div class="alert alert-danger" role="alert" id="msg1">

            </div>
          </div>
          <div class="mt-3 col-12">
            <!-- Email Input -->
            <div class="mb-3 form-floating">
              <input type="email" class="form-control" id="email2" placeholder="aloka@example.com" value="<?php echo $_COOKIE['email']; ?>">
              <label for="floatingInput">Email address</label>
            </div>
            <!-- Password Input -->
            <div class="mb-3 form-floating">
              <input type="password" class="form-control" id="password2" placeholder="Password" value="<?php echo $_COOKIE['password']; ?>">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberme" />
                <label class="form-check-label">Remember Me</label>
              </div>
            </div>
            <!-- forgot password -->
            <div class="col-6 offset-8">
              <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
            </div>
            <!-- Sign In Button -->
            <button type="button" class="mt-3 mb-1 text-white btn btn-info col-12" onclick="signin();">Sign In</button>
            <!-- Toggle to Sign Up Section -->
            <p class="text-center">Create a new account <a href="#" onclick="changeView();">Signup</a></p>
          </div>
          <button class="cta" onclick="adminChange();">>
            <span>Admin Log in</span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
          </button>
        </div>

      </div>
      <!-- modal -->
      <div class="modal" tabindex="-1" id="fpmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Forgot Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row g-3">

                <div class="col-6">
                  <label class="form-label">New Password</label>
                  <div class="mb-3 input-group">
                    <input type="password" class="form-control" id="np" />
                    <button id="npb" class="btn btn-outline-secondary" type="button" onclick="showPassword1();">Show</button>
                  </div>
                </div>

                <div class="col-6">
                  <label class="form-label">Re-type Password</label>
                  <div class="mb-3 input-group">
                    <input type="password" class="form-control" id="rnp" />
                    <button id="rnpb" class="btn btn-outline-secondary" type="button" onclick="showPassword2();">Show</button>
                  </div>
                </div>

                <div class="col-12">
                  <label class="form-label">Verification Code</label>
                  <input type="text" class="form-control" id="vcode" />
                </div>

              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
    </div>

  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha388-iqQ80CjrKlQ1VpLN3FMxifQzLtOhwIWGEH2tIW7boqApr4vIWXOqDjlzBrvdZGUv" crossorigin="anonymous"></script>
</body>

</html>