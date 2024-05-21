<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In/Sign Up Toggle</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="resources\profile for swart.jpg">

</head>

<body class="mainbody">
  <div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">
      <!--header-->
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <p class=" title01 text-light">Hi, Welcome to SWART Industries</p>
          </div>
        </div>
        <!--header-->

        <!--content-->
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-6 d-none  d-lg-block offset-10">
              <!--signup box-->
              <div class="col-12  col-lg-12 " id="signUpBox"></div>
              <div class="card ">
                <p class="title">Register </p>
              
                <div class="flex">
                  <label>
                    <input class="input" type="text" placeholder="" required="">
                    <span>Firstname</span>
                  </label>

                  <label>
                    <input class="input" type="text" placeholder="" required="">
                    <span>Lastname</span>
                  </label>
                </div>

                <label>
                  <input class="input" type="email" placeholder="" required="">
                  <span>Email</span>
                </label>

                <label>
                  <input class="input" type="password" placeholder="" required="">
                  <span>Password</span>
                </label>
                <label>
                  <input class="input" type="text" placeholder="" required="">
                  <span>Mobile</span>
                </label>
                <button class="submit">Submit</button>
                <p class="signin">Already have an account ? <a href="#" onclick="changeView();">Signin</a> </p>
              </div>
            </div>
            <!--sign up--->
            <!--sign in--->
            <div class="col-12" id="signInBox"></div>
              <div class="card">
                <p class="title">Log in </p>
                
              
                <label>
                  <input class="input" type="email" placeholder="" required="">
                  <span>Email</span>
                </label>

                <label>
                  <input class="input" type="password" placeholder="" required="">
                  <span>Password</span>
                </label>
                
                <button class="submit">Submit</button>
                <p class="signin">Create a new account <a href="#" onclick="changeView();">Sign up</a> </p>
              </div>
            </div>
            <!--sign in--->
          </div>
        </div>

      </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha386-iqQ80CjrKlQ1VpLN3FMxifQzLtOhwIWGEH2tIW7boqApr4vIWXOqDjlzBrvdZGUv" crossorigin="anonymous"></script>
</body>

</html>