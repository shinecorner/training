<?php include_once("../../header.php"); ?>
<div class="container">
    <h2>Deal form</h2>
    <form action="<?php echo '/controller/ajaxdeal/store.php' ?>" id="dealForm" method="post">
        <div class="col-6">
            <div class="form-group">
                <label for="property">Property </label>
                <select class="form-control" name="property" id="property">
                    <?php foreach($property as $pro) : ?>
                    <option value="<?php echo $pro['id'] ?>">
                        <?php echo $pro['sq_foot']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="customer">Customer </label>
                <select class="form-control" name="customer" id="customer">
                    <?php foreach($customer as $cust) : ?>
                    <option value="<?php echo $cust['id'] ?>">
                        <?php echo $cust['fname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="sq_foot_price">Per Sqaure Feet Price</label>
                <input type="text" name="sq_foot_price" class="form-control" id="sq_foot_price"
                    placeholder="Enter Sqaure Feet">
            </div>

            <div class="form-group">
                <label for="sq_foot_maintenance">Per Sqaure Maintanance</label>
                <input type="text" name="sq_foot_maintenance" value="250" class="form-control" id="sq_foot_maintenance"
                    readonly>
            </div>

            <div class="form-group">
                <label for="pgvcl_charge">PGVCL Charge:</label>
                <input type="text" name="pgvcl_charge" value="10000" class="form-control" id="pgvcl_charge" readonly>
            </div>

            <div class="form-group">
                <label for="token_amount">Token Amount:</label>
                <input type="text" name="token_amount" class="form-control" id="token_amount"
                    placeholder="Enter Token Amount">
            </div>
            <button type="submit" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>
            <button type="reset" id="result" class="btn btn-danger">Reset</button>

            <div id="remaining_amount_container">

            </div>


        </div>
    </form>
</div>

<script type="text/javascript">
$("#reset").on("click", function(e) {
    $("#result").empty();
});
</script>
<script type="text/javascript">
var test = ['snehal', 'patel'];
$(document).ready(function() {
    $("#dealForm").validate({
        rules: {
            property: {
                required: true,
            },
            customer: {
                required: true,
            },
            sq_foot_price: {
                required: true,
            },
            token_amount: {
                required: true,
            },
            sq_foot_maintenance: {
                required: true,
            },
            pgvcl_charge: {
                required: true,
            },
        }
    });
    $('#submit_btn').click(function() {
        let customer = $('#customer').val()
        let property = $('#property').val()
        let sq_foot_price = $('#sq_foot_price').val()
        let sq_foot_maintenance = $('#sq_foot_maintenance').val()
        let pgvcl_charge = $('#pgvcl_charge').val()
        let token_amount = $('#token_amount').val()
        $.post("/controller/ajaxdeal/store.php", {
            property: property,
            customer: customer,
            sq_foot_price: sq_foot_price,
            sq_foot_maintenance: sq_foot_maintenance,
            pgvcl_charge: pgvcl_charge,
            token_amount: token_amount
        }, function(response) {
            console.log(response);
            $('#remaining_amount_container').html(response)
        });
        return false;
    });
});
</script>
<?php include_once("../../footer.php"); ?>