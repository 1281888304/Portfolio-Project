<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);



//see if user login
session_start();

if(!isset($_SESSION['un'])) {  // if it is not login

    //store current location
    $_SESSION['page'] = $_SERVER["SCRIPT_URI"];

    header("location: login.php"); // from one page to login page
}
