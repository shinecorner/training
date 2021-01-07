<?php
include_once('../session_check.php');
include_once("../../connection.php");








$select = "select product.id,product.name,category.name as category_name,product.price from product
            inner join category on product.category_id = category.id";

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];
    


// $category = $categorydata[0];




include_once("../../views/product/list.php");


    
    ?>
    


