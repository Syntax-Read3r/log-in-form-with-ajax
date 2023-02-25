<?php 
    session_start();

    unset($_SESSION['loggedIN']);
    session_destroy();
    header(header: 'Location: login.php');
    exit();
?>

<!-- This is the log out file -->