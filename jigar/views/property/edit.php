<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

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

</body>

</html>




