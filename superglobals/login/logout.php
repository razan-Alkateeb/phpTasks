<!-- logout.php -->
<?php
session_start();


// session_destroy();
$_SESSION['is_logged_in'] = false;

header('Location: login.php');
exit;
?>
