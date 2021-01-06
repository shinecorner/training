<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Inquery List</h2>
    <a href="/controller/inquery/insert.php" class="btn btn-primary">Insert Inquery</a>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#inquery_list').DataTable({
            "pageLength": 2
        });
    });
    </script>
    <table id="inquery_list" class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Property</th>
                <th data-orderable="false"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $cid => $row):?>
            <tr>
                <td><?php echo $cid ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td>
                    <?php foreach($row['property'] as $p_id => $p_detail) : ?>
                    <?php echo $p_detail['type']."-" .$p_detail['sqfoot'] ?>
                    <br />
                    <?php endforeach; ?>
                </td>
                <td> <a href="<?php echo '/controller/inquery/delete.php?customer_id='.$cid ?>"
                        class="btn btn-primary">Delete</a>
                    <a href="<?php echo '/controller/inquery/edit.php?customer_id='.$cid ?>"
                        class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>

</div>

<?php include_once("../../footer.php"); ?>