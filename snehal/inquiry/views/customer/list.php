    <?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Customer List</h2>
        <a href="/views/customer/insert.php" class="btn btn-primary">Insert Customer</a><br />
        <script type="text/javascript">
        $(document).ready(function() {
            $('#customer_list').DataTable({
                "pageLength": 2,
            });
        });
        </script>

        <table id="customer_list" class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th data-orderable="false"> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td> <a href=" <?php echo '/controller/customer/delete.php?id='.$row['id']?>"
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
    <!-- </body>
</html> -->