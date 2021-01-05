<?php
include_once("../../connection.php");

$delete_query = "delete from order_product where order_id = " . $_POST['order'];
$delete_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));

if ($delete_result) {
    
    if(!empty($_POST['product'])){
        foreach($_POST['product'] as $product){
            $insert_query = "insert into order_product(product_id,order_id) values('".$product."','".$_POST['order']."')";
            $result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
            
        }
        header("Location: /controller/order_product/list.php");
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
