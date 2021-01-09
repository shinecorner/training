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
        $.post("/ajax_posttestdeal.php", {
                property_id: $("#property_id").val(),
                customer_id: $("#customer_id").val(),
                sq_foot_price: $("#sq_foot_price").val(),
                sq_foot_maintenance: $("#sq_foot_maintenance").val(),
                pgvcl_charge: $("#pgvcl_charge").val(),
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