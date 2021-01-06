<?php include_once("../../header.php"); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".cdelete").click(function() {
        let id = $(this).data("id");
        if (confirm("Do you want to delete")) {

          window.location.href = "/controller/order_product/delete.php?id=" + id;
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

      <a class="btn btn-primary" href="/controller/order_product/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table id="order_product_list" class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">  id </th>
              <th scope="col"> Transaction Number</th>
              <th scope="col"> Total</th>
              <th scope="col"> Product Name</th>
              <th scope="col"> Update</th>
              <th scope="col"> Delete </th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($input as $key => $row) : ?>
             
              <tr>
                <td>  <?php echo $key; ?> </a></td>
                <td><?php echo $row['transaction_num']; ?></td>
                <td><?php echo $row['total']; ?></td>
                <td><?php echo implode(",", $row['name']); ?></td>

                <td><a class="btn btn-primary" href="<?php echo '../../controller/order_product/edit.php?order_id=' . $row['order_id'] ?>">Edit</a> </td>
                <td><button type="button" class="btn btn-danger cdelete" data-id="<?php echo $row['order_id']; ?>">delete</button> </td>
              </tr>
            <?php endforeach; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#order_product_list').DataTable({
      "pageLength": 2
    });
  });
</script>
  <?php include_once("../../footer.php"); ?>