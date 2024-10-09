<?php
    Session_start();
    $_SESSION['userName'] = "Abc";
    $_SESSION['arr'] = array("1"=>"xyz","2"=>"mine");
    unset($_SESSION['arr']);
    session_unset();
    session_destroy();
    

?>