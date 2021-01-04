<?php

$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$delete_query = "delete from customer_property where property_id = " . $_POST['property'];
$delete_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));

if ($delete_result) {
    
    if(!empty($_POST['customer'])){
        foreach($_POST['customer'] as $customer){
            $insert_query = "insert into customer_property(customer_id,property_id) values('".$customer."','".$_POST['property']."')";
            $result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
            
        }
        header("Location: /jigar/controller/inquiry/list.php");
    }
   


}
exit("eror");

    // $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    // $property = [];
    // if(!empty($data))
    // {
    //     $property = $data[0];
    // }
    // //     print_r($data);
    // //     exit;
    // // // $input = [];
// include_once("../../views/property/edit.php");
// exit("error");
