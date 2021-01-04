<?php

include_once("../../connection.php");

$total_records_per_page = 2;

$page_no = 1;
if (isset($_GET['page_no']) && $_GET['page_no']!="")
 {
    $page_no = $_GET['page_no'];
 } 

    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";

$filter_input = null;
if (isset($_GET['filter_input'])) 
{
    $filter_input = $_GET['filter_input'];
    
}

$sql = "select  * from customer ";

if ($filter_input) 
{
    $sql .= " where ((fname like '%". $filter_input."%') || (lname like '%". $filter_input."%'))";
    $q = $sql;
        // echo $filter_input;
    // exit;
}

$cnt_result = mysqli_query($conn,$sql);
$cnt_rows = mysqli_fetch_all($cnt_result,MYSQLI_ASSOC);

$total_records = count($cnt_rows);
//  echo $total_records; exit;
$total_no_of_pages = ceil($total_records / $total_records_per_page);
// echo $total_no_of_pages; exit;
$second_last = $total_no_of_pages - 1; // total pages minus 1

$sql .=" LIMIT $offset, $total_records_per_page";
// echo $sql;
// exit;

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

include_once("../../views/customer/list.php");
?>