<?php
include_once('../session_check.php');
include_once("../../connection.php");






$per_page_record = 2;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     



$select = "select product.id,product.name,category.name as category_name,product.price from product
            inner join category on product.category_id = category.id LIMIT $start_from, $per_page_record";

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];
    


// $category = $categorydata[0];




include_once("../../views/product/list.php");


    
    ?>
    


