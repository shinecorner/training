    <?php include_once("../../header.php"); ?>
    <?php include_once("../../connection.php"); ?>
    <script type="text/javascript">
$(document).ready(function() {
    $("#check_ajax").click(function() {
        // alert("ajax");
        // $.get("/ajax_gettest.php", function(data, status) {
        //     // alert("Data: " + data + "\nStatus: " + status);
        //     $("#container").html("Data: " + data + "\nStatus: " + status);
        // });
        // alert ($("#fname").val());
        $.post("/ajax_posttest.php", {
                fname: $("#fname").val(),
                lname: $("#lname").val()
            },
            function(data, status) {
                var json = $.parseJSON(data);
                // console.log(json.fname);

                var html = '<tr>';
                html += '<td>' + json.id + '</td>';
                html += '<td>' + json.property_id + '</td>';
                html += '<td>' + json.customer_id + '</td>';
                html += '<td>' + json.sq_foot_price + '</td>';
                html += '<td>' + json.sq_foot_maintenance + '</td>';
                html += '<td>' + json.pgvcl_charge + '</td>';
                html += '<td>' + json.token_amount + '</td>';
                html += '<td>' + json.remaining_ammout + '</td></tr>';
                $('#container').append(html);
                // $("#container").html("ID: " + data);
            });
    })
});
    </script>

    <button type="button" id="check_ajax">Add</button>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/controller/deal/store.php" method="post">
                    <div class="form-group">
                        <label for="property_id">Property Id</label>
                        <input type="text" name="property_id" class="form-control" id="property_id" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="customer_id">Customer Id</label>
                        <input type="text" name="customer_id" class="form-control" id="customer_id" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="sq_foot_price">Per Sq foot Price</label>
                        <input type="text" name="sq_foot_price" class="form-control" id="sq_foot_price" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="sq_foot_maintenance">Per Sq foot Maintaions</label>
                        <input type="text" name="sq_foot_maintenance" class="form-control" id="sq_foot_maintenance"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="pgvcl_charge">PGVCL Charge </label>
                        <input type="text" name="pgvcl_charge" class="form-control" id="pgvcl_charge" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="token_amount">Token amount</label>
                        <input type="text" name="token_amount" class="form-control" id="token_amount" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="form-group">
                        <label for="remaining_ammout">Remaining Amount</label>
                        <input type="text" name="remaining_ammout" class="form-control" id="remaining_ammout"
                            placeholder="">
                    </div>
                </form>
            </div>

        </div>
        <?php 
    $sql = "select  remaining_ammout from Deal";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>remaining_ammout</th>
                </tr>
            </thead>
            <tbody id="container">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['remaining_ammout'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    </div>
    <?php include_once("../../footer.php"); ?>