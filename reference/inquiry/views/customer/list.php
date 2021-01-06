<?php include_once("../../header.php"); ?>

<h2>Customer List</h2>
<a href="/views/customer/insert.php" class="btn btn-primary">Insert Customer</a><br/>
<br/>
<script type="text/javascript">
    $(document).ready(function() {
        $('#customer_list').DataTable({
            "pageLength": 2
        });
    });
</script>
<table id="customer_list" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $record):?>
            <tr>
                <td><?php echo $record['id'] ?></td>
                <td><?php echo $record['fname'] ?></td>
                <td><?php echo $record['lname'] ?></td>
            </tr>

        <?php endforeach;?>
    </tbody>
</table>