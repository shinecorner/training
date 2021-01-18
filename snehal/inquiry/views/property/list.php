<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Property List</h2>
    <a href="/views/property/insert.php" class="btn btn-primary">Insert property</a>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#property_id').DataTable({
            "pageLength": 2
        });
    });
    </script>
    <table id="property_id" class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Sq_foot</th>
                <th>Dirction</th>
                <th>Description</th>
                <th>Number</th>
                <th>Is_sold</th>
                <th>Aggrement_date</th>
                <th data-orderable="false"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $filedname => $row):?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['sq_foot'] ?></td>
                <td><?php echo $row['dirction'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['number'] ?></td>
                <td><?php echo $row['is_sold'] ?></td>
                <td><?php echo $row['aggremnt_date'] ?></td>
                <td> <a href="<?php echo '/controller/property/delete.php?id='.$row['id']?>"
                        class="btn btn-danger">Delete</a>
                    <a href="<?php echo '/controller/property/edit.php?id='.$row['id']?>"
                        class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>

</div>
<?php include_once("../../footer.php"); ?>