<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Edit form</h2>
    <form action="<?php echo '../../controller/category/update.php' ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $category['id'];?>"/>
      
      <div class="form-group">
        <label for="name">Category Name: </label>
        <input type="text" name="name" value="<?php  echo $category['name'];?>" class="form-control" placeholder="Enter Category Name">
      </div>
     

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <?php include_once("../../footer.php"); ?>