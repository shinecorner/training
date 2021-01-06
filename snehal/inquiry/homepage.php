<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo ("Wellcome " . $_SESSION['username'] . " You are login successfully");
    

} else {
    exit("You can not access this page");
}

?>
