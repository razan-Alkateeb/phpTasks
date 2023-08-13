<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['pass']) && isset($_SESSION['is_logged_in'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['pass'];
    $is_logged_in = $_SESSION['is_logged_in'];

    // Display the data
    echo "Username::::: $username<br>";
    echo "User ID::::: $password<br>";
    echo "Logged in::::: " . ($is_logged_in ? "Yes" : "No");
} else {
    echo "No data found in the session.";
}


// session_destroy();