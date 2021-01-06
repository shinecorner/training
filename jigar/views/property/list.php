<?php include_once("../../header.php"); ?>



<script type="text/javascript">
  $(document).ready(function() {
    $(".cdelete").click(function() {
      let id = $(this).data("id");
      if (confirm("Do you want to delete")) {

        window.location.href = "/controller/product/delete.php?id=" + id;
      } else {
        console.log("not deleted");
      }
    });
  });
</script> 




<div class="container">
  <div class="row">

    <a class="btn btn-primary" href="../../views/property/insert.php"> Add Record </a>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered" id="property_list">
        <thead>
          <tr>
            <th scope="col"> Id </th>
            <th scope="col"> Type </th>
            <th scope="col">Square Feet</th>
            <th scope="col">Direction</th>
            <th scope="col">Discription</th>
            <th scope="col">Is Sold</th>
            <th scope="col">Evidance Date</th>
            <th scope="col">Update</th>
            <th scope="col">Remove</th>
            


          </tr>
        </thead>
        <tbody id="userData">
          <?php foreach ($data as $key => $row) : ?>

            <tr>
              <th scope="row"><?php echo $row["id"]; ?></th>
              <td><?php echo $row["type"]; ?></td>
              <td><?php echo $row["sq_feet"]; ?></td>
              <td><?php echo $row["direction"]; ?></td>
              <td><?php echo $row["discription"]; ?></td>
              <td><?php echo $row["is_sold"]; ?></td>
              <td><?php echo $row["evidance_date"]; ?></td>

              <td>
                <a class="btn btn-primary" href="<?php echo '../../controller/property/edit.php?id=' . $row['id'] ?>">Edit</a>
                </td>
                <td>
                <a class="btn btn-danger" href="<?php echo '../../controller/property/delete.php?id=' . $row['id'] ?>">delete</a>
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
    $("#property_list").DataTable({
      "pageLength": 2
    });
  });
</script>
<?php include_once("../../footer.php"); ?>