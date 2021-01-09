<?php include_once("../../header.php"); ?>
<div class="container">
    <h2>Dealing form</h2>
    <form action="<?php echo '../../controller/deal/store.php' ?>" id="dealForm" method="post">
        <div class="form-group">
            <label for="customer">Customer </label>
            <select name="customer" class="form-control" id="customer">
                <?php foreach ($customerdata as $key => $value) :  ?>
                    <option value="<?php echo $value["id"]; ?>"> <?php echo $value["firstname"]; ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="property">Property </label>
            <select name="property" class="form-control" id="property">
                <?php foreach ($propertydata as $key => $val) :  ?>
                    <option value="<?php echo $val['id'] ?>"> <?php echo $val['type']. '-' . $val['sq_feet']; ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="sq_feet_price">Per Sqaure Feet Price:</label>
            <input type="text" name="sq_feet_price" class="form-control" id="sq_feet_price" placeholder="Enter Sqaure Feet">
        </div>

        <div class="form-group">
            <label for="sq_feet_maintenance">Per Sqaure Maintanance:</label>
            <input type="text" name="sq_feet_maintenance" value="250" class="form-control" id="sq_feet_maintenance" placeholder="Enter First Name" readonly>
        </div>

        <div class="form-group">
            <label for="pgvcl_charge">PGVCL Charge:</label>
            <input type="text" name="pgvcl_charge" value="10000" class="form-control" id="pgvcl_charge" placeholder="Enter First Name" readonly>
        </div>

        <div class="form-group">
            <label for="token_amount">Token Amount:</label>
            <input type="text" name="token_amount" class="form-control" id="token_amount" placeholder="Enter Token Amount">
        </div>
        <button type="submit" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" id="result" class="btn btn-danger">Reset</button>

       <div id="remaining_price_container">

       </div>



    </form>
</div>
<script type="text/javascript">
$("#reset").on("click", function(e) {
    $("#result").empty();
});
</script>
<script type="text/javascript">
    var test = ['sandip', 'xyz'];
    $(document).ready(function (){
        $("#dealForm").validate({
            rules: {
                property: {
                    required: true
                },
                customer: {
                    required: true,
                },
                sq_feet_price: {
                    required: true,
                },
                token_amount: {
                    required: true,
                },
                sq_feet_maintenance: {
                    required: true,
                },
                pgvcl_charge: {
                    required: true,
                },
            }
        });
        $('#submit_btn').click(function (){
            let customer = $('#customer').val()
            let property = $('#property').val()
            let sq_feet_price = $('#sq_feet_price').val()
            let sq_feet_maintenance = $('#sq_feet_maintenance').val()
            let pgvcl_charge = $('#pgvcl_charge').val()
            let token_amount = $('#token_amount').val()
            $.post( "/controller/deal/store.php", { customer: customer,  property: property, sq_feet_price: sq_feet_price, sq_feet_maintenance: sq_feet_maintenance, pgvcl_charge: pgvcl_charge, token_amount: token_amount}, function( response ) {
                $('#remaining_price_container').html(response)
            });
            return false;
        });
    });
</script>


<?php include_once("../../footer.php"); ?>