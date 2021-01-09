<?php include_once("../../header.php"); ?>

<h2>Customer List</h2>
<script type="text/javascript">
    var test = ['sandip', 'xyz'];
    $(document).ready(function (){
        $('#submit_btn').click(function (){

            let firstname = $('#fname').val()
            let lastname = $('#lname').val()
            $.post( "/controller/ajax/store.php", { fname: firstname,  lname: lastname}, function( response ) {
                console.log(response);
                detail = JSON.parse(response)

                var html = '<tr>';
                html += '<td>' + detail.id + '</td>';
                html += '<td>' + detail.fname + '</td>';
                html += '<td>' + detail.lname + '</td>';
                html += '</tr>';
                $('#customer_list').append(html)
                // $( ".result" ).html( data );
            });
        });
    });
</script>
<div class="row">
    <div class="col-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="fname">Frist Name</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your Last Name">
            </div>
            <button type="button" id="submit_btn" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th></th>
    </tr>
    </thead>
    <tbody id="customer_list">
    <?php foreach ($rows as $filedname => $row): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php include_once("../../footer.php"); ?>

<!-- </body>
</html> -->