<?php
function dbquery(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
}
//return our db as object
return $conn;
}
