    <?php include_once("../../header.php"); ?>
    <?php include_once("../../connection.php"); ?>
    <script type="text/javascript">
$(document).ready(function() {
    $("#check_ajax").onclick(function() {
        // alert("ajax");
        // $.get("/ajax_gettest.php", function(data, status) {
        //     // alert("Data: " + data + "\nStatus: " + status);
        //     $("#container").html("Data: " + data + "\nStatus: " + status);
        // });
        // alert ($("#fname").val());
        $.get("/ajax_posttestdeal.php", {
                $GEt_['property_id']: $("#property_id").val(),
                customer_id: $("#customer_id").val(),
                sq_foot_price: $("#sq_foot_price").val(),
                sq_foot_maintenance: $("#sq_foot_maintenance").getval(),
                pgvcl_charge: $("#pgvcl_charge").getval(),
                token_amount: $("#token_amount").val(),
                remaining_amount: $("#remaining_amount").val()
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
                html += '<td>' + json.remaining_amount + '</td></tr>';
                $('#container').append(html);
                // $("#container").html("ID: " + data);
            });
    })
});
    </script>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/controller/deal/store.php" method="post">
                    <div class="form-group">
                        <label for="property_id">Property Id</label>
                        <select class="custom-select" name="property_id" id="property_id">

                            <option value="<?php echo $property['id'] ?>">
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customer_id">Customer Id</label>
                        <select class="custom-select" name="customer_id" id="customer_id">

                            <option value="<?php echo $customer['id'] ?>">
                                <!-- <?php echo $customer['fname']." " .$customer['lname']; ?> -->
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sq_foot_price">Per Sq foot Price</label>
                        <input type="text" name="sq_foot_price" class="form-control" id="sq_foot_price">
                    </div>
                    <div class="form-group">
                        <label for="sq_foot_maintenance">Per Sq foot Maintaions</label>
                        <input type="text" name="sq_foot_maintenance" class="form-control" id="sq_foot_maintenance"
                            value="$sq_foot_maintenance" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pgvcl_charge">PGVCL Charge </label>
                        <input type="text" name="pgvcl_charge" class="form-control" id="pgvcl_charge"
                            value="$pgvcl_charge" readonly>
                    </div>
                    <div class="form-group">
                        <label for="token_amount">Token amount</label>
                        <input type="text" name="token_amount" class="form-control" id="token_amount" placeholder="">
                    </div>
                    <button type="submit" id="check_ajax">Submit</button>
                </form>
            </div>

        </div>
        <?php 
    $sql = "select  remaining_amount from Deal";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>remaining_amount</th>
                </tr>
            </thead>
            <tbody id="container">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['remaining_amount'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    </div>
    <?php include_once("../../footer.php"); ?>