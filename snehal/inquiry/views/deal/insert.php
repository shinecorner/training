<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>New Customer Deal</h2>
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
</div>


<?php include_once("../../footer.php"); ?>