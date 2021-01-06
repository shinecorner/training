
<?php include_once("../../header.php"); ?>

  <!-- <script src="jquery-3.5.1.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".cdelete").click(function() {
        let pr_id = $(this).data("id");
        if (confirm("Do you want to delete")) {

          window.location.href = "/controller/product/delete.php?id=" + pr_id;
        } else {
          console.log("not deleted");
        }
      });
    });
  </script>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>



<body>
  <div class="container">
    <div class="row">

      <a class="btn btn-primary" href="../../controller/product/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered" id="product_list">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Product Name</th>
              <th scope="col">Category ID</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $row) : ?>


              <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["category_name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><a class="btn btn-primary" href="<?php echo '../../controller/product/edit.php?id=' . $row['id'] ?>">Edit</a> </td>
                <td><button type="button" href="<?php echo '../../controller/product/delete.php?id=' . $row['id'] ?>" class="btn btn-danger cdelete" data-id="<?php echo $row['id']; ?>">delete</button> </td>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
         
        </table>
        

      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#product_list").DataTable({
      "pageLength": 2
    });
  });
</script>
  <?php include_once("../../footer.php"); ?>