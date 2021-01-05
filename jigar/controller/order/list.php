<?php
include_once('../session_check.php');
include_once("../../connection.php");

// session_start();


$per_page_record = 2;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     



$select_order = "select * from orders LIMIT $start_from, $per_page_record";

    $o_query = mysqli_query($con,$select_order) or die(mysqli_error($con));

    $order_data = mysqli_fetch_all($o_query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];




include_once("../../views/order/list.php");
