<?php
    session_start();
    // Destroy session
    
    if(session_destroy()) {
        // Redirecting To Home Page
        setcookie('email',$row['email'],time()+60);
        header("Location: login.php");
    }
?>
