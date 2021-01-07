<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Product Insert form</h2>
    <form action="<?php echo '../../controller/product/update.php' ?>" method="post">
    
    <input type="hidden" name="id" value="<?php echo $product['id'];?>"/>
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" placeholder="Enter Your Product Name">
      </div>

      <div class="form-group">
        <label for="category_id">Category ID </label>
        <select name="category_id" class="form-control" id="category_id">
          <?php foreach ($categorydata as $key => $val) :  ?>
            <option <?php echo ($val['id'] == $product['category_id']) ? 'selected': '' ?> value="<?php echo $val['id']; ?>"> <?php echo $val['name']; ?> </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="price">Price:</label>
        <input type="price" name="price" class="form-control" value="<?php echo $product['price']; ?>" placeholder="Enter Your Price">
      </div>


      <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include_once("../../footer.php"); ?>