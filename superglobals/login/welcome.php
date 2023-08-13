<!-- welcome.php -->
<?php
session_start();


if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    $username = $_SESSION['username'];
    echo "Welcome, $username!";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    header('Location: login.php');
    exit;
}
?>
