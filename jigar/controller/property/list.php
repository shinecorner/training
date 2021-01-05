<?php
// session_start();
include_once('../session_check.php');
include_once("../../connection.php");



$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'id';

$sort_property = isset($_GET['sort_property']) ? $_GET['sort_property'] : 'ASC';


$per_page_record = 2;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $per_page_record;


$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'id';

$sort_property = isset($_GET['sort_property']) ? $_GET['sort_property'] : 'ASC';


$filter_input = null;
if (isset($_GET['filter_input'])) {
    $filter_input = $_GET['filter_input'];
}


$select = "select * from property ";

if ($filter_input) {
    $select .= "where discription like '%" . $filter_input . "%' ";
    // $page  = $_GET["page"];
   }
$select .= "order by " . $sort_by . " " . $sort_property;
$query = mysqli_query($con, $select) or die(mysqli_error($con));

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
$total_pages = ceil(count($data) / $per_page_record);
// print_r($data); exit;
$select .= " LIMIT $start_from, $per_page_record";
$query = mysqli_query($con, $select) or die(mysqli_error($con));

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

$filter_pages = ceil(count($data) / $per_page_record);


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

include_once("../../views/property/list.php");
