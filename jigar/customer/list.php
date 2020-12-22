<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

// "select property.id,property.type,property.sq_feet,customer.firstname
// from ((customer_property
// inner join property.id = customer_property.property_id)
// inner join customer.id = customer_property.customer_id)";

?>



<table class="table" border="1px" align="center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact Number</th>
    </tr>
  </thead>
  <tbody>


    <?php


    $select = "select customer.*,customer_contact.contact,customer_contact.id as contact_id from customer
             left join customer_contact on customer.id = customer_contact.customer_id";

    $query = mysqli_query($con, $select);

    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $input = [];

    foreach($data as $key => $value)
    {
      //   print_r($value);
      //  exit;

      $input[$value["id"]]["id"] = $value["id"];
      $input[$value["id"]]["firstname"] = $value["firstname"];
      $input[$value["id"]]["lastname"] = $value["lastname"];
      $input[$value["id"]]["contact"][$value["contact_id"]] = $value["contact"];


    }

    // print_r($input);
    // exit;
    ?>
    <?php foreach ($input as $row) : ?>

      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo implode(",",$row['contact']); ?></td>

      </tr>
    <?php endforeach; ?>



  </tbody>
</table>

