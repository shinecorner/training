<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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

      <a class="btn btn-primary" href="/jigar/controller/order_product/insert.php"> Add Record </a>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col"> <a href="<?php echo '../../controller/order_product/list.php?sort_by=id&sort_order='.($sort_order == 'ASC'?'DESC':'ASC')?>">  id </a></th>
              <th scope="col"> <a href="<?php echo '../../controller/order_product/list.php?sort_by=transaction_num&sort_order='.($sort_order == 'ASC'?'DESC':'ASC')?>">Transaction Number </a></th>
              <th scope="col">Total</th>
              <th scope="col"> Product Name</th>
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
</body>

</html>