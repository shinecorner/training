<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".cdelete").click(function() {
      let id = $(this).data("id");
      if (confirm("Do you want to delete")) {

        window.location.href = "/jigar/controller/product/delete.php?id=" + id;
      } else {
        console.log("not deleted");
      }
    });
  });
</script>
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
      <form align="center" method="get" action="/jigar/controller/property/list.php">
        <input type="text" name="filter_input" value="<?php echo $filter_input; ?>" id="filter_input">
        <input type="submit" name="search" value="search">
        <button class="btn btn-danger" href="<?php echo '../../controller/property/list.php' ?>" value="Reset"> <a href="<?php echo '../../controller/property/list.php' ?>"> Reset </a> </button>

      </form>

    </div>
    <div class="row">

      <a class="btn btn-primary" href="../../views/property/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">
                 
                <?php
                

                if (isset($filter_input)) {
                echo  "<a href='/jigar/controller/property/list.php?filter_input=" . $filter_input . "&sort_by=id&sort_property=" . ($sort_property == 'ASC' ? 'DESC' : 'ASC') . "'>
      Id
    </a>";
                } else {
                 echo  "<a href='/jigar/controller/property/list.php?sort_by=id&sort_property=" . ($sort_property == 'ASC' ? 'DESC' : 'ASC') . "'>
      Id
    </a>";
                }

                ?>



              </th>
              <th scope="col"> <a href="<?php echo '../../controller/property/list.php?sort_by=type&sort_property=' . ($sort_property == 'ASC' ? 'DESC' : 'ASC') ?>">Type </a></th>
              <th scope="col">Square Feet</th>
              <th scope="col">Direction</th>
              <th scope="col">Discription</th>
              <th scope="col">Is Sold</th>
              <th scope="col">Evidance Date</th>
              <th scope="col">Actions</th>
              <th scope="col">Status</th>


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
                  <a class="btn btn-danger" href="<?php echo '../../controller/property/delete.php?id=' . $row['id'] ?>">delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="pagination">
          <?php

          // include_once("../../controller/property/pagination.php");

          $pagLink =  "";
          // echo $pagLink.=$i = $page ? 'selected' : '';
          for ($i = 1; $i <= $total_pages; $i++) {

            if (isset($filter_input)) {
              $pagLink .= "<a class = 'active' href='/jigar/controller/property/list.php?page="
                . $i . '&filter_input=' . $filter_input . "'>"  . $i .   " </a>";
            } else {
              $pagLink .= "<a class = 'active' href='/jigar/controller/property/list.php?page=" . $i . "'>   
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