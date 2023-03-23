<?php
    //start the session
    session_start();
    unset($_SESSION['id']);
    header('Location: signin.php');

    // If the logout button is clicked
    //if (isset($_POST['logout'])) {
        // Destroy the session and redirect to the login page
        //session_destroy();
        //header('Location: login.php');
        //exit;
    //}
?>