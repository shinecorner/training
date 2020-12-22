<?php include_once("../../header.php"); ?>


  <h2>Category List</h2>
  <a href="/views/category/insert.php" class="btn btn-primary">Insert Category</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($rows as $filedname => $row):?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td></td>
            <td></td>
            <td> <a href="<?php echo '/controller/category/delete.php?id='.$row['id']?>" class="btn btn-primary">Delete</a>
             <a href="<?php echo '/controller/category/edit.php?id='.$row['id']?>" class="btn btn-primary">Edit</a></td>
        </tr>
     <?php endforeach;?>

    </tbody>
  </table>


<?php include_once("../../footer.php"); ?>
<!-- 
</body>
</html> -->