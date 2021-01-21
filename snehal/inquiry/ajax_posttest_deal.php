<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$q = "INSERT INTO deal (fname, lname)
VALUES ('".$fname."', '".$lname."')";

$result = $conn->query($q);

if($result)
{
    $deal_id = mysqli_insert_id($conn);
    $sql = "select  * from deal where id = $deal_id ";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
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