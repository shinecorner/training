<?php include_once("../../header.php"); ?>

<h2>New Category</h2>
<div class="row">
    <div class="col-6">
        <form action="/controller/customer/update.php" method="post">
                 <input type="hidden" value="<?php echo $record['id'] ?>" name="id" class="form-control" id="id" placeholder="Enter category name">
            <div class="form-group">
                <label for="fname">Frist Name</label>
                <input type="text" value="<?php echo $record['fname'] ?>" name="fname" class="form-control" id="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" value="<?php echo $record['lname'] ?>" name="lname" class="form-control" id="lname" placeholder="Enter your Last Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php include_once("../../footer.php"); ?>