<?php

//  print_r($_GET);
include_once("../session_check.php");
include_once("../../connection.php");

    $sql = "SELECT c.*,p.type as p_type,p.sq_foot as p_sqfoot,p.id as p_id,cp.id as cp_id FROM customer as c LEFT JOIN customer_property as cp on c.id=cp.customer_id LEFT JOIN property as p on cp.property_id=p.id
";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // $records = $rows[0];
    // $records = $q[0];
    //  print_r($rows);
    //   exit;

    foreach($rows as $key => $row)
{
    $records[$row['id']]['firstname'] = $row['fname'];
    $records[$row['id']]['lastname'] = $row['lname']; 
    $records[$row['id']]['property'][$row['p_id']]['type'] = $row['p_type'];
    $records[$row['id']]['property'][$row['p_id']]['sqfoot'] = $row['p_sqfoot'];
}   

    include_once("../../views/inquery/list.php");
?>