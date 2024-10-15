<?php

$valid_username = 'Vaibhav';
$valid_password = '123';




$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $valid_username && $password === $valid_password) {
    echo "Login successful! Welcome, $username.";
} else {
    echo "Invalid username or password. Please try again.";
}
?>
