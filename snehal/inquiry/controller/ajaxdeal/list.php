<?php
include_once('../session_check.php');
include_once("../../connection.php");

$sql = "select property.id as p_id,property.type,property.sq_feet,customer.fname,customer.id as c_id
from ((customer_property
left join property on property.id = customer_property.property_id)
left join customer on customer.id = customer_property.customer_id)";
 $result = $conn->query($sql);
//  var_dump ($result);
//  exit;
  $rows = $result->fetch_all(MYSQLI_ASSOC);
    

$record = [];

foreach ($rows as $key => $row) {
    $record[$row["p_id"]]["property_id"] = $row["p_id"];
    $record[$row["p_id"]]["fname"][$row['c_id']] = $row["fname"];
}
include_once("../../views/inquiry/list.php");
    // print_r($record);
    // exit;