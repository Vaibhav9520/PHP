<?php
    session_start(); // Start the session
    $_SESSION['userName'] = "Abc";
    $_SESSION['arr'] = array("1"=>"xyz","2"=>"mine");

    // session_destroy();
    // Function to check if the session is started
    if (session_status() === PHP_SESSION_ACTIVE) {
        echo "Session is started";
    } else {
        echo "Session is not started";
    }
?>
