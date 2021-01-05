<?php
include_once("../../connection.php");



$selected_property = $_GET['property_id'];
$selected_customer = [];

$sc_query = "select * from customer_property where property_id = $selected_property";


$sc_result = mysqli_query($con,$sc_query) or die(mysqli_error($con));

    $sc_data = mysqli_fetch_all($sc_result,MYSQLI_ASSOC);
// print_r($sc_data);
// exit;
    foreach($sc_data as $record)
    {
        $selected_customer[] = $record['customer_id'];

    }
    // print_r($selected_customer); exit;


    $c_query = "select * from customer";
    $resultC = mysqli_query($con, $c_query);
    
    $customerdata = mysqli_fetch_all($resultC,   MYSQLI_ASSOC);
    
    // print_r($customerdata);
    // exit;
    $p_query = "select * from property";
    $resultP = mysqli_query($con, $p_query);
    
    $propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);
    
    
    include_once("../../views/inquiry/edit.php");

