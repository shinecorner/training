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
    $customer_id = mysqli_insert_id($conn);
    $sql = "select  * from customer where id = $customer_id ";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $specific_row = $rows[0];
    echo json_encode($specific_row);
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>