<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>New Property</h2>
    <div class="row">
        <div class="col-6">
            <form action="/controller/property/update.php" method="post">
                <input type="hidden" value="<?php echo $record['id'] ?>" name="id" class="form-control" id="id"
                    placeholder="Enter category name">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="custom-select" name="type" id="type">
                        <option <?php echo $record['type'] == 'shop' ? 'selected' : '' ?> value="shop">Shop</option>
                        <option <?php echo $record['type'] == 'office' ? 'selected' : '' ?> value="office">Office
                        </option>
                        <option <?php echo $record['type'] == 'flat' ? 'selected' : '' ?> value="flat">Flat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sq_foot">Sq. foot</label>
                    <input type="number" value="<?php echo $record['sq_foot'] ?>" name="sq_foot" class="form-control"
                        id="sq_foot" placeholder="Enter Sq. foot">
                </div>
                <div class="form-group">
                    <label for="number">Direction</label>
                    <select class="custom-select" name="dirction" id="dirction">
                        <option <?php echo $record['dirction'] == 'west' ? 'selected' : '' ?> value="west">West</option>
                        <option <?php echo $record['dirction'] == 'east' ? 'selected' : '' ?> value="east">East</option>
                        <option <?php echo $record['dirction'] == 'north' ? 'selected' : '' ?> value="north">North
                        </option>
                        <option <?php echo $record['dirction'] == 'south' ? 'selected' : '' ?> value="south">South
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Description</label>
                    <textarea id="<?php echo $record['description'] ?>" name="description" class="form-control"
                        id="description" rows="3">Shop on 80 ft. road</textarea>
                </div>
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" value="<?php echo $record['number'] ?>" name="number" class="form-control"
                        id="number" placeholder="Enter number">
                </div>
                <div class="form-check">
                    <input type="checkbox" <?php echo $record['is_sold'] == 1 ? 'checked' : '' ?> name="is_sold"
                        value="1" class="form-check-input" id="is_sold">
                    <label class="form-check-label" for="is_sold">Is Sold</label>
                </div>
                <div class="form-group">
                    <label for="aggremnt_date">Aggremnt date</label>
                    <input type="date" value="<?php echo $record['aggremnt_date'] ?>" name="aggremnt_date"
                        class="form-control" id="aggremnt_date" placeholder="Enter number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include_once("../../footer.php"); ?>