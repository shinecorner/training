    <?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Customer List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    </td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <?php include_once("../../footer.php"); ?>