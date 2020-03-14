<?php
//Turn on error reporting -- this is critical!


//See if the user is logged in
session_start();

//If not logged in
if (!isset($_SESSION['un'])) {

    //Store current location
    $_SESSION['page'] = $_SERVER["SCRIPT_URI"];

    //Redirect to login page - must come before anything, cannot below any php that has an output
    header("location: login.php");
}