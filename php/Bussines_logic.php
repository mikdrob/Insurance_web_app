<?php
// check for email in POST

if (isset($_POST['email'])) {
    require_once 'query.php';
    session_start();

    $email = $_POST['email'];
    $psw = $_POST['password'];
    // get if we already have such user
    $sql = "SELECT id FROM Users WHERE email = '$email' and psw = '$psw';";
    $conn = dbquery();

    // if we don't have such user then num_rows gives 0 and we add new user in table
    if ($conn->query($sql)->num_rows !== 0) {
        $id = $conn->query($sql)->fetch_assoc();
        $_SESSION['id'] = $id["id"];
        $conn->close();
        //check if the user came here from signup form
    }
        // else username or password was incorrect and we go back to main page
    else {
        $conn->close();
        header("Location: ../index.php");
        $conn->close();
    }

    
}



?>

<script type="text/javascript">
    window.location = "../WebApp.php";
</script>