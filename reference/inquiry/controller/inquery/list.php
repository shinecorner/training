<?php

//  print_r($_GET);
include_once("../session_check.php");
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


 $records = [];
    
    //  exit('123');
    $q = "SELECT c.*,p.type as p_type,p.sq_foot as p_sqfoot,p.id as p_id,cp.id as cp_id FROM customer as c LEFT JOIN customer_property as cp on c.id=cp.customer_id LEFT JOIN property as p on cp.property_id=p.id
";
$cnt_result = mysqli_query($conn,$q);
$cnt_rows = mysqli_fetch_all($cnt_result,MYSQLI_ASSOC);

$total_records = count($cnt_rows);
// echo $total_records; exit;
$total_no_of_pages = ceil($total_records / $total_records_per_page);
// echo $total_no_of_pages; exit;
$second_last = $total_no_of_pages - 1; // total pages minus 1

$q .=" LIMIT $offset, $total_records_per_page";
// echo $sql;
// exit;
    $result = mysqli_query($conn,$q);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // $records = $rows[0];
    // $records = $q[0];
    //  print_r($rows);
    //   exit;

    foreach($rows as $key => $row)
{
    // $records[$row['id']] = [
    //     'firstname' => $row['fname'],
    //     'lastname' => $row['lname']
    // ];    
// print_r($row);
// print_r($records);
// exit;
    $records[$row['id']]['firstname'] = $row['fname'];
    $records[$row['id']]['lastname'] = $row['lname']; 
    $records[$row['id']]['property'][$row['p_id']]['type'] = $row['p_type'];
    $records[$row['id']]['property'][$row['p_id']]['sqfoot'] = $row['p_sqfoot'];


}   

// print_r($records);
    // exit;   
    include_once("../../views/inquery/list.php");
?>


