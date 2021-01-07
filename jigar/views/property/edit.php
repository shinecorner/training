<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Stacked form</h2>
    <form action="<?php echo '../../controller/property/update.php' ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $property['id']; ?>" />
      <div class="form-group">
        <label for="type">Type</label>
        <select name="type" class="form-control" id="type">
          <option value="">select</option>
          <option <?php echo ($property['type'] == 'office') ? 'selected' : ''; ?> value="office">Office</option>
          <option <?php echo ($property['type'] == 'shop') ? 'selected' : ''; ?> value="shop">Shop</option>
          <option <?php echo ($property['type'] == 'flat') ? 'selected' : ''; ?> value="flat">Flat</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sq_feet">Sqaure Feet:</label>
        <input type="text" name="sq_feet" value="<?php echo $property['sq_feet']; ?>" class="form-control" placeholder="Enter Square Feet">
      </div>

      <div class="form-group">
        <label for="direction">Direction</label>
        <select name="direction" class="form-control" id="direction">
          <option value="">select</option>
          <option <?php echo ($property['direction'] == 'north') ? 'selected' : ''; ?> value="north">North</option>
          <option <?php echo ($property['direction'] == 'south') ? 'selected' : ''; ?> value="south">South</option>
          <option <?php echo ($property['direction'] == 'east') ? 'selected' : ''; ?> value="east">East</option>
          <option <?php echo ($property['direction'] == 'west') ? 'selected' : ''; ?> value="west">West</option>
        </select>
      </div>

      <div class="form-group">
        <label for="discription">Discription:</label>
        <textarea name="discription" class="form-control" rows="5" id="discription">
          <?php echo $property['discription']; ?>
        </textarea>
      </div>


      <div class="form-group form-check">
        <label for="is_sold" class="form-check-label">
          <input class="form-check-input" value="1" name="is_sold" <?php echo ($property['is_sold'] == '1') ? 'checked' : ''; ?> id="is_sold" type="checkbox"> Is Sold?
        </label>
      </div>
      <div class="form-group">
        <label for="evidance_date">Evidance Date:</label>
        <input type="date" name="evidance_date" value="<?php echo $property['evidance_date'] ?>" name="evidance_date" class="form-control" placeholder="Enter Square Feet">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include_once("../../footer.php"); ?>



