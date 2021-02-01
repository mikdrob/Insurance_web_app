<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Contact us!</title>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <style>
    .my-form {
      color: #305896;
    }

    .my-form .btn-default {
      background-color: #305896;
      color: #fff;
      border-radius: 0;
    }

    .my-form .btn-default:hover {
      background-color: #4498C6;
      color: #fff;
    }

    .my-form .form-control {
      border-radius: 0;
    }
  </style>


</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Fund-Shield Insurance</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="offer.php">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu p-3">
              <form class="form-horizontal" action="cookie.php" method="post" accept-charset="UTF-8">
              <input class="form-control login" type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" >
                <input class="form-control login" type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" >
                <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me! <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                <a class="btn btn-primary" type="button" href="Signup.php" target="_blank">Sign Up</a>
              </form>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div>
      <h1><i>Contact Us</i></h1>
    </div>
    <br />
    <div class="row">

      <br />
      <div class="col-md-6">
        <form name="contactform" method="post" action="send_form_email.php">
          <div class="form-group">
            <label for="form-name">Name</label>
            <input name="name" type="text" class="form-control" id="form-name" placeholder="Name" maxlength="50"
              size="30">
          </div>
          <div class="form-group">
            <label for="form-email">Email Address</label>
            <input name="email" type="email" class="form-control" id="form-email" placeholder="Email Address"
              maxlength="80" size="30">
          </div>
          <div class="form-group">
            <label for="form-subject">Telephone</label>
            <input name="telephone" type="tel" class="form-control" id="form-subject" placeholder="Telephone"
              maxlength="30" size="30">
          </div>
          <div class="form-group">
            <label for="form-message">Email your Message</label>
            <textarea name="comments" class="form-control" id="form-message" placeholder="Message"
              maxlength="1000"></textarea>
          </div>
          <button class="" type="submit"> Contact Us </button>
        </form>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
</body>

</html>