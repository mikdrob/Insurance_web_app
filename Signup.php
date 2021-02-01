<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sign up Fund-Shield Insurance</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Insurance provider</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="offer.php">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Signup.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contacts.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Fund-Shield Insurance!</h1>
    </div>
  </header>

  <body>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <div class="container-fluid">
      <div class="container">
        <hr>
        <form action="./php/New_user.php" method="post" style="border:1px solid #ccc">
          <div class="containers">
            <h1> <i>Sign Up</i></h1>
            <p><i></i>Please fill in this form to create an account.</i></p>
            <hr>
            <label for="firstName"><b>FirstName</b></label>
            <input type="text" placeholder="First Name" name="firstname" value="<?php if (isset($_COOKIE["firstName"])) {
                                                                                  echo $_COOKIE["firstName"];
                                                                                } ?>" class="input-field" required>
            <label for="lastName"><b>LastName</b></label>
            <input type="text" placeholder="Last Name" name="lastname" value="<?php if (isset($_COOKIE["lastName"])) {
                                                                                echo $_COOKIE["lastName"];
                                                                              } ?>" class="input-field" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" value="<?php if (isset($_COOKIE["email"])) {
                                                                                echo $_COOKIE["email"];
                                                                              } ?>" class="input-field" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" id="password" placeholder="Enter Password" name="psw" value="<?php if (isset($_COOKIE["psw"])) {
                                                                                                  echo $_COOKIE["psw"];
                                                                                                } ?>" class="input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" id="confirm_password" placeholder="Repeat Password" name="psw-repeat" value="<?php if (isset($_COOKIE["psw-repeat"])) {
                                                                                                                  echo $_COOKIE["psw-repeat"];
                                                                                                                } ?>" class="input-field" required>

            


            <hr>
            <p>By creating an account you agree to our <a href="#" target="_blank">Terms & Privacy.</a>.</p>


            <button type="submit" class="registerbtn">Register</button>
          </div>



      </div>
      <script>
        var password = document.getElementById("password"),
          confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
          if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
      </script>
        <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  </body>


</html>