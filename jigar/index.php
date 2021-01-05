<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    // exit("if");
    header("Location: /controller/customer/list.php");
    exit;
}
else{
    // exit("else");
    header("Location: /views/login/login.php");
    exit;
}


?>