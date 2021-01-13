<?php

include_once("../session_check.php");
include_once("../../connection.php");

$sql = "select  c.*,cp.id as cp_id, cp.phone  from customer as c left join customer_phone as cp on c.id=cp.customer_id";

$result = $conn->query($sql);
 $rows = $result->fetch_all(MYSQLI_ASSOC);

    foreach($rows as $key => $row)
    {
    $record[$row['id']]['id'] = $row['id'];
    $record[$row['id']]['firstname'] = $row['fname'];
    $record[$row['id']]['lastname'] = $row['lname']; 
    $record[$row['id']]['phone'][$row['cp_id']] = $row['phone']; 
    //echo $row['phone'];
    //  exit;
    }  
    // exit('abc'); 
include_once("../../views/customer_phone/list.php");
//  print_r($record);
    // exit;   
?>