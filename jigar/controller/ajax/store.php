<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

if(isset($_POST['btn_submit']))
{
$insert_category = "insert into category values('','$_POST[name]')";


$c_query = mysqli_query($con,$insert_category) or die(mysqli_error($con));
if($c_query)
{
    $category_id = mysqli_insert_id($con);
    $sql = "select  * from category where id = $category_id ";
    $result = mysqli_query($con,$sql);
    $category_data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $specific_row = $category_data[0];
    echo json_encode($specific_row);
    exit;    

}

}

// include_once("../../views/category/insert.php");

?>