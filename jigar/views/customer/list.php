<?php include_once("../../header.php"); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".cdelete").click(function() {
      let id = $(this).data("id");
      if (confirm("Do you want to delete")) {

        window.location.href = "/controller/customer/delete.php?id=" + id;
      } else {
        console.log("not deleted");
      }
    });
  });
</script> 

<div class="container">
  <div class="row">

    <a class="btn btn-primary" href="../../views/customer/insert.php"> Add Record </a>
    
  </div>
  <div class="row">
    <div class="col-12">
      <table id="customer_list" class="table table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
            <th scope="col">Update</th>
          </tr>
        </thead>


        <tbody>
          <?php foreach ($data as $record) : ?>
            <tr>
              <td><?php echo $record['id'] ?></td>
              <td><?php echo $record['firstname'] ?></td>
              <td><?php echo $record['lastname'] ?></td>

              <td>
              <a class="btn btn-primary" href="<?php echo '../../controller/customer/edit.php?id=' . $row['id'] ?>">Edit</a> 
              </td>
              <td>
              <button type="button" href="<?php echo '../../controller/customer/delete.php?id=' . $row['id'] ?>" class="btn btn-danger cdelete" data-id="<?php echo $row['id']; ?>">delete</button> </td>
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
    $("#customer_list").DataTable({
      "pageLength": 2
    });
  });
</script>
<?php include_once("../../footer.php"); ?>