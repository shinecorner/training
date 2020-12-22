<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;
?>


<table class="table" border="1px" align="center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Type</th>
      <th scope="col">Sqaure Feet</th>
      <th scope="col">Customer first name</th>
    </tr>
  </thead>

  <tbody>
    
<?php


$select = "select property.id as prop_id,property.type,property.sq_feet,customer.firstname,customer.id as cust_id
from ((property
inner join customer_property on property.id = customer_property.property_id)
inner join customer on customer.id = customer_property.customer_id)";


$query = mysqli_query($con,$select) or die(mysqli_error($con));

$data = mysqli_fetch_all($query,MYSQLI_ASSOC);

// print_r($data);
// exit;

// $input = [];

// foreach($data as $key => $value)
// {
//     $input[$value["prop_id"]]["property_id"] = $value["prop_id"];
//     $input[$value["prop_id"]]["type"] = $value["type"];
//     $input[$value["prop_id"]]["sq_feet"] = $value["sq_feet"];
//     $input[$value["prop_id"]]["firstname"] = $value["firstname"];



// }

// print_r($input);
// exit;
?>

<?php foreach($data as $key => $row): ?>

<tr>
  <td><?php echo $key; ?></td>
  <td><?php echo $row['type']; ?></td>
  <td><?php echo $row['sq_feet']; ?></td>
  <td><?php echo $row['firstname']; ?></td>

</tr>
<?php endforeach; ?>



</tbody>
</table>