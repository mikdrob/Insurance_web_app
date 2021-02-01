<?php
if (isset($_POST['firstname'])) {
    require_once 'query.php';
    session_start();
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $sql = "INSERT INTO users (id, firstname, lastname, psw, email, dateOfBirth, gender, contactNumber, reg_date) VALUES (NULL, '$firstName', '$lastName', '$psw', '$email', NULL, '', '', current_timestamp())";
    $conn = dbquery();
    $conn->query($sql);
    $sql = "INSERT INTO insurances (id, userID, typeOfInsurance, startingDate, expirationDate, coverage, reg_date) VALUES (NULL, '$conn->insert_id', '', NULL, NULL, NULL, current_timestamp())";
    $_SESSION['id'] = $conn->insert_id; //inser_id gives last id in table
    $conn->query($sql);
    $conn->close();
}
?>
<script type="text/javascript">
    window.location = "../WebApp.php";
</script>