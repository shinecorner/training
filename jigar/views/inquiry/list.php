<?php include_once("../../header.php"); ?>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".cdelete").click(function() {
        let property_id = $(this).data("property_id");
        if (confirm("Do you want to delete")) {

          window.location.href = "/controller/inquiry/list.php?property_id=" + property_id;
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

      <a class="btn btn-primary" href="/controller/inquiry/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table id="inquiry_list" class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Type</th>
              <th scope="col">Sqaure Feet</th>
              <th scope="col">Customer</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($input as $key => $row) : ?>

              <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['sq_feet']; ?></td>
                <td><?php echo implode(",", $row['firstname']); ?></td>

                <td><a class="btn btn-primary" href="<?php echo '../../controller/inquiry/edit.php?property_id=' . $row['property_id'] ?>">Edit</a> </td>
                <td><button type="button" href="<?php echo '../../controller/inquiry/delete.php?property_id=' . $row['property_id'] ?>" class="btn btn-danger cdelete" data-id="<?php echo $row['property_id']; ?>">delete</button> </td>
              </tr>
            <?php endforeach; ?>


          </tbody>
        </table>
        


      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#inquiry_list").DataTable({
      "pageLength": 2
    });
  });
</script>
  <?php include_once("../../footer.php"); ?>