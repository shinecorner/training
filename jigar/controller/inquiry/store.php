<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

// print_r($_POST);
// exit;


if(isset($_POST['customer']) && !empty($_POST['customer']))
{
    $delete_query = "delete from customer_property where property_id = " . $_POST['property'];
$delete_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));

    foreach($_POST['customer'] as $key => $customer_id)
    {
        $query = "insert into customer_property(customer_id,property_id) values('".$customer_id."','".$_POST['property']."')";
        // echo $query;
        // exit;
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
    }

}
if($result)
{
header("Location: /controller/inquiry/list.php");
}
    //     $property = $data[0];
    // }
    // //     print_r($data);
    // //     exit;
    // // // $input = [];
// include_once("../../views/property/edit.php");
// exit("error");
