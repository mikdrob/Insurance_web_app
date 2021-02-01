<!doctype html>
<html lang="en">

<head>
  <title>Insurance!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/side-bar-style.css">
  <link rel="stylesheet" href="css/webdat.css">
</head>

<body>
  <?php
  // we require all data for the page
  require './php/insurance_get_data.php';
    ?>
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.php" class="logo">Fund-Shield Insurance</a></h1>
      <ul class="list-unstyled components mb-5">
        <li>
          <a href="WebApp.php"><span class="fa fa-home mr-3"></span> Profile</a>
        </li>
        <li class="active">
          <a href="#"><span class="fa fa-user mr-3"></span> Insurance</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sticky-note mr-3"></span> Inbox</a>
        </li>

      </ul>

    </nav>

    <!-- Page Content  -->

    <div id="content" class="p-4 p-md-5 pt-5">
      <form id="form" action="./InsuranceWebApp.php" method="post">
        <button type="button" class="btn btn-primary" id="edit" onclick="enableEditing()">Edit</button>
        <label for="typeOfInsurance">Insurance type:</label><br>
        <select class="formm" id="typeOfInsurance" name="typeOfInsurance">
          <option value="<?php echo $insurance['typeofinsurance'] ?>"><?php echo $insurance['typeofinsurance'] ?></option>
          <option value="Car">Car</option>
          <option value="Property">Property</option>
          <option value="Health">Health</option>
        </select><br>

        <label for="startingDate">Start Date:</label><br>
        <input type="date" name="startingDate" size="50" id="for" class="formm" value="<?php echo $insurance['startingdate'] ?>"><br>

        <label for="expirationdate">Expiration Date:</label><br>
        <input type="date" name="expirationdate" size="50" id="for" class="formm" value="<?php echo $insurance['expirationdate'] ?>"><br>

        <label for="coverage">Insurance Coverage:</label><br>
        <input type="number" name="coverage" class="formm" value="<?php echo $insurance['coverage'] ?>"><br>

        <input class="btn btn-primary" style="display: none;" id="sumbitButton" type="submit"></input>
        <button type="button" class="btn btn-primary" style="display: none;" id="cancel" onclick="blockEditing(true)">Cancel</button>
      </form>

      <p><?php

          ?></p>

    </div>
    <div>
    <form action="./php/logout.php" method="post">
    <button class="log" type="submit" style="border: 1px solid; cursor: pointer; float: right; color: white; background-color: rgba(83, 51, 237, 1);"> Logout!</button>
    </form>
    
    </div>
    <script src="js/edit.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>