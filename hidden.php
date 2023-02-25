<?php
    session_start();

    if(!isset($_SESSION['logenIN'])) {
        header(header: 'Location: login.php');
        exit();
    }

?>

You are logged in successfully