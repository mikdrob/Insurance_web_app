<?php
// startup process, we create user instance, get his id from session, updating (in case of editing)
// assign the data from db to user instance, send the instance over session (not sure if it works)
require 'CurrentUser.php';
require_once  __DIR__ . '/../queries/update.php';
session_start();
if (!isset($_SESSION['id']))
{
  header("Location: ../index.php");
}
$id = $_SESSION['id'];
updateRow("Insurances", $id, $_POST, "userId");
require_once 'query.php';
//we select user by id (new user also have it)
$sql = "SELECT typeofinsurance, startingdate, expirationdate, coverage FROM Insurances WHERE userID = '$id'";
$conn = dbquery();
$insurance = $conn->query($sql)->fetch_assoc();
$conn->close();
