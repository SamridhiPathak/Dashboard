<?php
    /*
    Author: CSDT
    Website: https://www.csdt.co.in
    */
    session_start();
    if(session_destroy()) // Destroying All Sessions
    {
        header("Location: login.php"); // Redirecting To Home Page
    }
?>