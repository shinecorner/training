<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$q = "INSERT INTO customer (fname, lname)
VALUES ('".$fname."', '".$lname."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);

if($result)
{
    header('Location: /controller/customer/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>