<?php
// session_start();

include_once('../session_check.php');
include_once("../../connection.php");


$select = "select * from property ";
$query = mysqli_query($con, $select) or die(mysqli_error($con));

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

include_once("../../views/property/list.php");

// if(isset()


// echo $select;
// exit;

// $total_page = count($data);

// $total_pages = ceil(count($data) / $per_page_record);
// print_r($data); exit;
//     // print_r($data);
// exit;
// $input = [];
// $status = ($data['status'] == 1)?'Active':'Inactive';


