<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>New Customer</h2>
    <div class="row">
        <div class="col-6">
            <form action="/controller/customer/store.php" method="post">
                <div class="form-group">
                    <label for="fname">Frist Name</label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your First Name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your Last Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


<?php include_once("../../footer.php"); ?>