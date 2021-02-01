
<?php
if (isset($_POST)) {
session_start();
session_unset();
//this function delete all the values from session
session_destroy();
}
?>

<script type="text/javascript">
    window.location = "../index.php";
</script>