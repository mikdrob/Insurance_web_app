<?php
function assignUser($id){
require_once 'User.php';
require_once 'query.php';
//we select user by id (new user also have it)
$sql = "SELECT id, firstname, lastname, psw, email, dateofbirth, gender, contactNumber, reg_date FROM Users WHERE id = '$id'";
$conn = dbquery();
$obj = $conn->query($sql)->fetch_assoc();

$conn->close();
return $obj;
}