<?php include_once("../../header.php"); ?>

<h2>New Property</h2>
<div class="row">
    <div class="col-6">
        <form action="/controller/property/store.php" method="post">
        <div class="form-group">
                <label for="type">Type</label>                
                <select class="custom-select" name="type" id="type">                
                    <option value="shop">Shop</option>
                    <option value="office">Office</option>
                    <option value="flat">Flat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sq_foot">Sq. foot</label>
                <input type="number" name="sq_foot" class="form-control" id="sq_foot" placeholder="Enter Sq. foot">
            </div>
            <div class="form-group">
                <label for="number">Direction</label>                
                <select class="custom-select" name="dirction" id="dirction">
                    <option value="west">West</option>
                    <option value="east">East</option>
                    <option value="north">North</option>
                    <option value="south">South</option>
                </select>
            </div>
            <div class="form-group">
                <label for="number">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3">Shop on 80 ft. road</textarea>            
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" name="number" class="form-control" id="number" placeholder="Enter number">
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_sold" value="1" class="form-check-input" id="is_sold">
                <label class="form-check-label" for="is_sold">Is Sold</label>
            </div>
            <div class="form-group">
                <label for="aggremnt_date">Aggrement date</label>
                <input type="date" name="aggremnt_date" class="form-control" id="aggremnt_date" placeholder="Enter number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php include_once("../../footer.php"); ?>