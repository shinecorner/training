<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Insert form</h2>
    <form action="<?php echo '../../controller/order/insert.php' ?>" method="post">
          
      <div class="form-group">
        <label for="transaction_num">Transaction Number:</label>
        <input type="text" name="transaction_num"  class="form-control" placeholder="Enter transaction Number">
      </div>

      <div class="form-group">
        <label for="total">Total:</label>
        <input type="text" name="total"   class="form-control" placeholder="Enter Total">
      </div>
      

      <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include_once("../../footer.php"); ?>