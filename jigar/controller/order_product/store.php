<?php

// print_r($_POST);
// exit;
include_once('../session_check.php');
include_once("../../connection.php");

// print_r($_POST);
// exit;

if(isset($_POST['product']) && !empty($_POST['product']))
{
    foreach($_POST['product'] as $key => $product_id)
    {
        $query = "insert into order_product(product_id,order_id) values('".$product_id."','".$_POST['order']."')";
        // $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $result = $con->query($query);
    }
}
header("Location: /controller/order_product/list.php");
    //     $property = $data[0];
    // }
    // //     print_r($data);
    // //     exit;
    // // // $input = [];
// include_once("../../views/property/edit.php");
// exit("error");
    
    ?>
    


