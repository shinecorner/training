<?php

$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$per_page_record = 2;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     


$select = "select * from customer LIMIT $start_from, $per_page_record";

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // print_r($data);
        // exit;
    // $input = [];
include_once("../../views/customer/list.php");
    
    ?>
    

