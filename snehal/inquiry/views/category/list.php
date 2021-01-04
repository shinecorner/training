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

  <ul class="pagination">
        <?php if($page_no > 1): ?>
        <?php $url= "?page_no=1" ?>
        <li class="page-item"><a class="page-link" href="<?php echo $url ?>">First Page</a></li>
        <?php endif ; ?>

        <li <?php echo ($page_no <= 1) ? "class='page-item disabled'"  : 'page-item' ; ?>>
            <?php if($page_no > 1) : ?>
            <?php $url =  "?page_no=$previous_page"; ?>
            <a class="page-link" href="<?php echo $url ?>">Previous</a>
            <?php endif ;?>
        </li>
        <?php if ($total_no_of_pages <= 10) : ?>
          <?php for ($counter = 1; $counter <= $total_no_of_pages; $counter++) : ?>
            <?php if ($counter == $page_no) : ?>
              <li class='active'><a class="page-link"><?php echo $counter; ?></a></li>            
            <?php else : ?>
              <?php $url = "?page_no=$counter"; ?>
              <li><a class="page-link" href= "<?php echo $url; ?>"><?php echo $counter; ?></a></li>           
              <?php endif ; ?>
          <?php endfor ; ?>
        <?php endif ; ?>

        <li <?php echo ($page_no >= $total_no_of_pages) ? "class='page-item disabled'" : 'page-item'; ?>>
            <?php if($page_no < $total_no_of_pages) : ?>
            <?php $url = "?page_no=$next_page" ?>
            <a class="page-link" href="<?php echo $url ?>">Next</a>
            <?php endif ; ?>
        </li>

        <?php if($page_no < $total_no_of_pages) : ?>
        <?php $url = "?page_no=$total_no_of_pages"; ?>
        <li class="page-item"><a class="page-link" href="<?php echo $url ?>">Last</a></li>
        <?php endif ?>
    </ul>


<?php include_once("../../footer.php"); ?>
<!-- 
</body>
</html> -->