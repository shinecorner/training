<?php

//  print_r($_GET);

include_once("../session_check.php");
include_once("../../connection.php");
 $record = [];
 
    //  exit('123');
    $q = "SELECT * FROM customer";
    $result = mysqli_query($conn,$q);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // $record = $rows[0];
    // $record = $q[0];
    // print_r($record);
    //  exit;

    foreach($rows as $key => $cid)
{
    // $record[$cid['id']] = [
    //     'firstname' => $cid['fname'],
    //     'lastname' => $cid['lname']
    // ];    
$record[$cid['id']]['firstname'] = $cid['fname'];
$record[$cid['id']]['lastname'] = $cid['lname']; 
}   
print_r($record);
    // exit;   
?>


