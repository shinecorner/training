<?php include_once("../../header.php"); ?>
<div class="container">
    <h2>Dealing form</h2>
    <form action="<?php echo '../../controller/deal/store.php' ?>" id="dealForm" method="post">

        <div class="form-group">
            <label for="property">Property </label>
            <select name="property" class="form-control" id="property">
                <?php foreach ($propertydata as $key => $val) :  ?>
                    <option value="<?php echo $val['id'] ?>"> <?php echo $val['type'] . '-' . $val['sq_feet']; ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="customer">Customer </label>
            <select name="customer" class="form-control" id="customer">
                <?php foreach ($customerdata as $key => $value) :  ?>
                    <option value="<?php echo $value["id"]; ?>"> <?php echo $value["firstname"]; ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="sq_feet_price">Per Sqaure Feet Price:</label>
            <input type="text" name="sq_feet_price" class="form-control" id="sq_feet_price" placeholder="Enter Sqaure Feet">
        </div>

        <div class="form-group">
            <label for="discount_offer">Discount Offer:</label>
            <input type="text" name="discount_offer" class="form-control" id="discount_offer" placeholder="Enter Discount Offer">
        </div>

        <div class="form-check">
            
            <input class="form-check-input" name="emi_check" type="checkbox" value="1" id="emi_check">
            <label for="emi_check" class="form-check-label">Do you want to apply Emi?:</label>
        </div>

        <div class="form-group">
            
            <input type="text" name="emi_amount" style="display: none;" class="form-control" id="emi_amount" placeholder="Enter EMI Amount">
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
    $(document).ready(function() {
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
            },
            submitHandler: function(form) {
                let customer = $('#customer').val()
                let property = $('#property').val()
                let sq_feet_price = $('#sq_feet_price').val()
                let sq_feet_maintenance = $('#sq_feet_maintenance').val()
                let discount_offer = $('#discount_offer').val()
                let emi_amount = $('#emi_amount').val()
                let pgvcl_charge = $('#pgvcl_charge').val()
                let token_amount = $('#token_amount').val()
                $.post("/controller/deal/store.php", {
                    customer: customer,
                    property: property,
                    sq_feet_price: sq_feet_price,
                    sq_feet_maintenance: sq_feet_maintenance,
                    discount_offer: discount_offer,
                    emi_amount: emi_amount,
                    pgvcl_charge: pgvcl_charge,
                    token_amount: token_amount
                }, function(response) {
                    $('#remaining_price_container').html(response)
                });
                return false;
            },

        });
    });
</script> 

<script type="text/javascript">
        $(document).ready(function() {
            $('input[type="checkbox"]').change(function() {
                if($(this).prop("checked") == true){
                $("#discount_offer").val("");
                $("#discount_offer").prop('disabled', true);
             
            }
            else if($(this).prop("checked") == false){
                console.log("Checkbox is unchecked.");
                $("#discount_offer").prop('disabled', false);
            }
                $('#emi_amount').toggle();
            });
        });
    </script>
<?php include_once("../../footer.php"); ?>