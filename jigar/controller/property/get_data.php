<?php

$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$filter_input = $_POST['filter_input'];
$where = "where discription like '%".$filter_input."%'";
$sql = "select * from property $where";

// echo "$sql";
// exit;
$res = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($res);

if ($num_rows> 0) {
    
// output data of each row
while($result = mysqli_fetch_array($res)) {
$status = ($result['status'] == 1)?'Active':'Inactive';
echo $html = "<tr id='new_row'>
<td> ".$result['type']."</td>
<td>".$result['sq_feet']."</td>
<td>".$result['direction']."</td>
<td>".$result['discription']."</td>
<td>".$result['is_sold']."</td>
<td>".$result['evidance_date']."</td>
<td>".$status."</td>
</tr>";
}
}
else
{
echo "No Record Found";
}

// include_once("../../views/property/list.php");

?>