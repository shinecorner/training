<?php include_once("../../header.php"); ?>


<div class="container">
    <h2>Product from</h2>
    <form action="<?php echo '/controller/product/insert.php' ?>" id="dealForm" method="post">
        <div class="col-6">
            <div class="form-group">
                <label for="productname">Product Name</label>
                <input type="text" name="productname" class="form-control" id="productname"
                    placeholder="Enter Your Product Name">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <select class="custom-select custom-select-lg mb-3 form-control" name="size" id="size">
                    <option value="">Select Your Size</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="3XL">3XL</option>
                    <option value="4XL">4XL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" class="form-control" id="color" placeholder="Enter Your Color">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter Your price">
            </div>
            <div class="form-group">
                <label for="store_type">Store Type</label>
                <select class="custom-select custom-select-lg mb-3 form-control" name="store_type" id="store_type">
                    <option value="">Select Store Type</option>
                    <option value="database">DBStorge</option>
                    <option value="file">CSVStorge</option>
                </select>
            </div>
            <button type="submit" id="submit_btn" name="btn_submit" class="btn btn-primary">Save</button>

            <button type="reset" id="result" class="btn btn-danger">Reset</button>

            <div id="product-type-detail">

            </div>


        </div>
    </form>
</div>


<script type="text/javascript">
$("#reset").on("click", function(e) {
    $("#result").empty();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#dealForm").validate({
        rules: {
            productname: {
                required: true
            },
            size: {
                required: true,
            },
            color: {
                required: true,
            },
            price: {
                required: true,
            },
            store_type: {
                required: true,
            },
        },
        submitHandler: function(form) {
            let productname = $('#productname').val()
            let size = $('#size').val()
            let color = $('#color').val()
            let price = $('#price').val()
            let store_type = $('#store_type').val()
            $.post("/controller/product/insert.php", {
                productname: productname,
                size: size,
                color: color,
                price: price,
                store_type: store_type
            }, function(response) {
                $('#product-type-detail').html(response)
            });
            return false;
        },
    });
});
</script>
<?php include_once("../../footer.php"); ?>