<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Insert form</h2>
    <form action="<?php echo '../../controller/category/insert.php' ?>" method="post">
          
      <div class="form-group">
        <label for="name">Category name</label>
        <input type="text" name="name"  class="form-control" placeholder="Enter Category">
      </div>

      <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include_once("../../footer.php"); ?>