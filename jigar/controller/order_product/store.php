<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

// print_r($_POST);
// exit;

if(isset($_POST['product']) && !empty($_POST['product']))
{
    foreach($_POST['product'] as $key => $product_id)
    {
        $query = "insert into order_product(product_id,order_id) values('".$product_id."','".$_POST['order']."')";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
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
    


