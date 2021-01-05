<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <!-- <script src="jquery-3.5.1.js"></script> -->
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


<style>
  table {
    border-collapse: collapse;
  }

  .inline {
    display: inline-block;
    float: right;
    margin: 20px 0px;
  }

  input,
  button {
    height: 34px;
  }

  .pagination {
    display: inline-block;
  }

  .pagination a {
    font-weight: bold;
    font-size: 18px;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid black;
  }

  .pagination a.active {
    background-color: pink;
  }

  .pagination a:hover:not(.active) {
    background-color: skyblue;
  }
</style>



<body>
  <div class="container">
    <div class="row">

      <div>

      </div>
      <a class="btn btn-primary" href="../../controller/order/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Transaction Number</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
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

        <div class="pagination">
          <?php

          include_once("../../controller/order/pagination.php");

          for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
              $pagLink .= "<a class = 'active' href='/controller/order/list.php?page="
                . $i . "'>" . $i . " </a>";
            } else {
              $pagLink .= "<a href='/controller/order/list.php?page=" . $i . "'>   
                                              " . $i . " </a>";
            }
          };
          echo $pagLink;

          ?>

        </div>

      </div>
    </div>
  </div>
</body>

</html>