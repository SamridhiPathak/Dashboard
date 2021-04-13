<?php
    /*
    Author: Ravi
    Website: https://www.csdt.co.in/
    */
?>
<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("Location: login.php");
        exit(); 
    }
?>