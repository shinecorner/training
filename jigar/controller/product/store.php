<?php
include_once('../session_check.php');
include_once("../../connection.php");


if (isset($_POST['btn_submit'])) {
    
    // print_r($_POST);
    // exit;

    $insert_product = "insert into product(name,category_id,price) values('$_POST[name]','$_POST[category_id]','$_POST[price]')";
    
    // $p_query  = mysqli_query($con, $insert_product) or die(mysqli_error($con));
    $p_query = $con->query($insert_product);
    
if ($p_query) {
    header("Location: /controller/product/list.php");
}
}
?>