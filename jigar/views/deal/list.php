
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>Property Id</th>
        <th>Customer Id</th>
        <th>Sqaure Feet Price</th>
        <th>Sqaure Feet MaintanANCE</th>
        <th>pgvcl charge</th>
        <th>Token Amount</th>
        <th>Remaining Balance</th>
        <th></th>
    </tr>
    </thead>
    <tbody id="customer_list">
    <?php foreach ($rows as $filedname => $row): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            <td><?php echo $row['sq_feet_price'] ?></td>
            <td><?php echo $row['sq_feet_maintenance'] ?></td>
            <td><?php echo $row['pgvcl_charge'] ?></td>
            <td><?php echo $row['token_amount'] ?></td>
            <td><?php echo $row['remaining_balance'] ?></td>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php include_once("../../footer.php"); ?>
