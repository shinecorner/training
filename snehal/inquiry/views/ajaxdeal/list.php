    <?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Customer List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Property id</th>
                    <th>Customer id</th>
                    <th>per Sq foot price</th>
                    <th>per Sq foot Maintaions</th>
                    <th>PGVCL Charge</th>
                    <th>Token amount</th>
                    <th>Remaining Amount</th>
                </tr>
            </thead>
            <tbody id="customer_list">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['property_id'] ?></td>
                    <td><?php echo $row['customer_id'] ?></td>
                    <td><?php echo $row['sq_foot_price'] ?></td>
                    <td><?php echo $row['sq_foot_maintenance'] ?></td>
                    <td><?php echo $row['pgvcl_charge'] ?></td>
                    <td><?php echo $row['token_amount'] ?></td>
                    <td><?php echo $row['remaining_amount'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <?php include_once("../../footer.php"); ?>