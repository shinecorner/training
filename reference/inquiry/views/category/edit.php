<?php include_once("../../header.php"); ?>

<h2>New Category</h2>
<div class="row">
    <div class="col-6">
        <form action="/controller/category/update.php" method="post">
                 <input type="hidden" value="<?php echo $record['id'] ?>" name="id" class="form-control" id="id" placeholder="Enter category name">
  
            <div class="form-group">
                <label for="name">category Name</label>
                <input type="text" value="<?php echo $record['name'] ?>" name="name" class="form-control" id="name" placeholder="Enter category name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php include_once("../../footer.php"); ?>