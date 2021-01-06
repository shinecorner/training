<?php include_once("../../header.php"); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $(".cdelete").click(function() {
      let id = $(this).data("id");
      if (confirm("Do you want to delete")) {

        window.location.href = "/controller/order/delete.php?id=" + id;
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

      <div>

      </div>
      <a class="btn btn-primary" href="../../controller/order/insert.php"> Add Record </a>

    </div>
    <div class="row">
      <div class="col-12">
        <table id="order_list" class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Transaction Number</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($order_data as $key => $row) : ?>

              <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["transaction_num"]; ?></td>
                <td><?php echo $row["total"]; ?></td>

                <td><a class="btn btn-primary" href="<?php echo '../../controller/order/edit.php?id=' . $row['id'] ?>">Edit</a> </td>
                <td><button type="button" href="<?php echo '../../controller/order/delete.php?id=' . $row['id'] ?>" class="btn btn-danger cdelete" data-id="<?php echo $row['id']; ?>">delete</button> </td>
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
    $('#order_list').DataTable({
      "pageLength": 2
    });
  });
</script>
  <?php include_once("../../footer.php"); ?>