<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>New Customer Deal</h2>
    <div class="row">
        <div class="col-6">
            <form action="/controller/deal/store.php" method="post">
                <div class="form-group">
                    <label for="property_id">Property Id</label>
                    <select class="custom-select" name="property_id" id="property_id">

                        <option value="<?php echo $row['property_id'] ?>">
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="customer_id">Customer Id</label>
                    <select class="custom-select" name="customer_id" id="customer_id">

                        <option value="<?php echo $deal['customer_id'] ?>">
                            <!-- <?php echo $customer['fname']." " .$customer['lname']; ?> -->
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sq_foot_price">Per Sq foot Price</label>
                    <input type="text" name="sq_foot_price" class="form-control" id="sq_foot_price" placeholder="">
                </div>
                <div class="form-group">
                    <label for="sq_foot_maintenance">Per Sq foot Maintaions</label>
                    <input type="text" name="sq_foot_maintenance" class="form-control" id="sq_foot_maintenance"
                        value="$sq_foot_maintenance" readonly>
                </div>
                <div class="form-group">
                    <label for="pgvcl_charge">PGVCL Charge </label>
                    <input type="text" name="pgvcl_charge" class="form-control" id="pgvcl_charge" value="$pgvcl_charge"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="token_amount">Token amount</label>
                    <input type="text" name="token_amount" class="form-control" id="token_amount" placeholder="">
                </div>
                <button type="submit" id="check_ajax">Submit</button>
        </div>
        </form>

    </div>
</div>
</div>


<?php include_once("../../footer.php"); ?>