<?php

//  print_r($_GET);
include_once("../../connection.php");
 $record = [];
 
    //  exit('123');
    $q = "SELECT c.*,cp.phone,cp.id as cp_id FROM customer as c LEFT JOIN customer_phone as cp ON c.id=cp.customer_id";
    $result = mysqli_query($conn,$q);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // $record = $rows[0];
    // $record = $q[0];
    print_r($rows);
      exit;

    foreach($rows as $key => $row)
{
    // $record[$row['id']] = [
    //     'firstname' => $row['fname'],
    //     'lastname' => $row['lname']  
    // ];    
// print_r($row['cp_id']);
// exit;
$record[$row['id']]['id'] = $row['id'];
$record[$row['id']]['firstname'] = $row['fname'];
$record[$row['id']]['lastname'] = $row['lname']; 
$record[$row['id']]['phone'][$row['cp_id']] = $row['phone']; 
//echo $row['phone'];
//  exit;
}   

//  print_r($record);
    // exit;   
?>


