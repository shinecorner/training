<?php include_once("../../header.php"); ?>


<!-- <script src="jquery-3.5.1.js"></script> -->
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
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $row) : ?>


            <tr>
              <th scope="row"><?php echo $row["id"]; ?></th>
              <td><?php echo $row["firstname"]; ?></td>
              <td><?php echo $row["lastname"]; ?></td>

              <td><a class="btn btn-primary" href="<?php echo '../../controller/customer/edit.php?id=' . $row['id'] ?>">Edit</a> </td>
              <td><button type="button" href="<?php echo '../../controller/customer/delete.php?id=' . $row['id'] ?>" class="btn btn-danger cdelete" data-id="<?php echo $row['id']; ?>">delete</button> </td>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="pagination">
        <?php

        include_once("../../controller/customer/pagination.php");

        for ($i = 1; $i <= $total_pages; $i++) {
          if ($i == $page) {
            $pagLink .= "<a class = 'active' href='/controller/customer/list.php?page="
              . $i . "'>" . $i . " </a>";
          } else {
            $pagLink .= "<a href='/controller/customer/list.php?page=" . $i . "'>   
                                              " . $i . " </a>";
          }
        };
        echo $pagLink;

        ?>

      </div>

    </div>
  </div>
</div>
<?php include_once("../../footer.php"); ?>