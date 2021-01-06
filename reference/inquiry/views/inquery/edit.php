<?php include_once("../../header.php"); ?>

<h2>New Property</h2>
<div class="row">
    <div class="col-6">
        <form action="/controller/inquery/update.php" method="post">
        <div class="form-group">
                <label for="customer_id">Customer</label>                
                <select class="custom-select" name="customer_id" id="customer_id">
                <?php foreach($customers as $customer) : ?>                
                    <option <?php echo ($selected_customer_id == $customer['id']) ? 'selected' : ''     ; ?> value="<?php echo $customer['id'] ?>"><?php echo $customer['fname']." " .$customer['lname']; ?></option>     
                    <?php endforeach; ?>              
                </select>
            </div>  
            <div class="form-group">
                <label for="property_id">Property</label>                
                <select multiple class="custom-select" name="property_id[]" id="property_id">
                <?php foreach($properties as $property) : ?>                
                    <option <?php echo (in_array($property['id'], $selected_property_ids)) ? 'selected' : '' ; ?> value="<?php echo $property['id'] ?>"><?php echo $property['type']." " .$property['sq_foot']; ?></option>     
                    <?php endforeach; ?>              
                </select>
            </div>            
                  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php include_once("../../footer.php"); ?>