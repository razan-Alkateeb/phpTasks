<!-- process_login.php -->
<?php
session_start();

$valid_username = 'mohammed';
$valid_password = 'password123';




if (isset($_GET['username']) && isset($_GET['password'])) {
    $submitted_username = $_GET['username'];
    $submitted_password = $_GET['password'];


    if ($submitted_username === $valid_username && $submitted_password === $valid_password) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $submitted_username;

        header('Location: welcome.php');
    
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password. <a href='http://localhost/php/super/login/login.php'>Please try again.</a>";
    }
}
?>
