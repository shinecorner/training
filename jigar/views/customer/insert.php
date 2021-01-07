<?php include_once("../../header.php"); ?>

  <div class="container">
    <h2>Insert form</h2>
    <form action="<?php echo '/controller/customer/ajax_info.php' ?>" method="post" id="myForm">

      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" class="form-control" id="fname" placeholder="Enter First Name">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Last Name">
      </div>
      <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
      <div class="form-group" id="demo">
                
       
      </div>
    </form>
  </div>

</body>

</html>