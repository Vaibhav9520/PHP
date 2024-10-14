<?php

// $valid_username = 'Vaibhav';
// $valid_password = '123';
session_start(); // Start the session
$_SESSION['userName'] = "Abc";
$_SESSION['arr'] = array("1"=>"xyz","2"=>"mine");


$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $valid_username && $password === $valid_password) {
    echo "Login successful! Welcome, $username.";
} else {
    echo "Invalid username or password. Please try again.";
}
?>
