<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Edit form</h2>
    <form action="<?php echo '../../controller/order/update.php' ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $order['id'];?>"/>
      
      <div class="form-group">
        <label for="transaction_num">Transaction Number</label>
        <input type="text" name="transaction_num" value="<?php  echo $order['transaction_num'];?>" class="form-control" placeholder="Enter First Name">
      </div>

      <div class="form-group">
        <label for="total">Price </label>
        <input type="text" name="total" value="<?php  echo $order['total'];?>" class="form-control" placeholder="Enter Last Name">
      </div>
      

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <?php include_once("../../footer.php"); ?>