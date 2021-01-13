<?php
//print_r($_POST);

include_once("../session_check.php");
include_once("../../connection.php");
$type = $_POST['type'];
$sq_foot = $_POST['sq_foot'];
$dirction = $_POST['dirction'];
$description = $_POST['description'];
$number = $_POST['number'];
$is_sold = (isset($_POST['is_sold'])) ? $_POST['is_sold'] : 0;
$aggremnt_date = (isset($_POST['aggremnt_date'])) ? $_POST['aggremnt_date'] : NULL;

$sql = "INSERT INTO property (type, sq_foot, dirction, description, number, is_sold, aggremnt_date)
VALUES ('".$type."', '".$sq_foot."', '".$dirction."', '".$description."', '".$number."', '".$is_sold."','".$aggremnt_date."')";
// echo $q;
// exit;
$result = $conn->query($sql);


if($result)
{
    header('Location: /controller/property/list.php');
    exit;
}

else
{
    exit('misstake in qurey');
}

// var_dump($result);
// exit;
?>