<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    // exit("if");
    header("Location: /views/login/login.php");
    exit;
}

?>