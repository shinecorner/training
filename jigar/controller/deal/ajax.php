<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$q = "INSERT INTO deal (fname, lname)
VALUES ('".$fname."', '".$lname."')";

$result = mysqli_query($conn,$q);

if($result)
{
    $deal_id = mysqli_insert_id($con);
    $sql = "select  * from deal where id = $deal_id ";
    $result = mysqli_query($con,$sql);
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
