<?php

session_start();

$_SESSION['username'] = 'yousif';
$_SESSION['pass'] = 123;
$_SESSION['is_logged_in'] = true;



$username = $_SESSION['username'];
$password = $_SESSION['pass'];
$is_logged_in = $_SESSION['is_logged_in'];



echo "Username: $username<br>";
echo "User ID: $password<br>";
echo "Logged in: " . ($is_logged_in ? "Yes" : "No");    