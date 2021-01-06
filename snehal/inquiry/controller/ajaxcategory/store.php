<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");
$name = $_POST['name'];

$q = "INSERT INTO category (name)
VALUES ('".$name."')";

// echo $q;
// exit;
$result = mysqli_query($conn,$q);

if($result)
{
    header('Location: /controller/category/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>