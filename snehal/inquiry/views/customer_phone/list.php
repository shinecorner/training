<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Customer List</h2>
    <a href="/views/customer_phone/insert.php" class="btn btn-primary">Insert Customer</a>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#customer_phone_list').DataTable({
            "pageLength": 2
        });
    });
    </script>

    <table id="customer_phone_list" class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone Number</th>
                <th data-orderable="false"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($record as $key => $row):?>
            <?php //print_r($row); exit; ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <?php if((isset($row['phone'])) && (!empty($row['phone']))) : ?>
                <td><?php echo implode(",",$row['phone']) ?></td>
                <?php endif ?>
                <td> <a href="<?php echo '/controller/customer/delete.php?id='.$row['id']?>"
                        class="btn btn-primary">Delete</a>
                    <a href="<?php echo '/controller/customer/edit.php?id='.$row['id']?>"
                        class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>


</div>
<?php include_once("../../footer.php"); ?>