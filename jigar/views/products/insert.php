<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Products Insert form</h2>
    <form action="<?php echo '/controller/products/store.php' ?>" method="post" id="myForm">

        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter Product Name">
        </div>

        <div class="form-group">
            <label for="size">Size :</label>
            <select class="form-control" name="size" id="size">
                <option value="m">m</option>
                <option value="s">s</option>
                <option value="l">l</option>
                <option value="xl">xl</option>
                <option value="xxl">xxl</option>
                <option value="3xl">3xl</option>

            </select>
        </div>

        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Enter Color">
        </div>

        <div class="form-group">
            <label for="price">Price :</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
        </div>

        <div class="form-group">
            <label for="store_type">Store Type :</label>
            <select class="form-control" name="store_type" id="store_type">
                <option value="database">database</option>
                <option value="csv">csv</option>
            </select>
        </div>


        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
        <div class="form-group" id="demo">


        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#myForm").validate({
            rules: {
                product_name: {
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
                let product_name = $('#product_name').val()
                let size = $('#size').val()
                let color = $('#color').val()
                let price = $('#price').val()
                let store_type = $('#store_type').val()

                $.post("/controller/products/store.php", {
                    product_name: product_name,
                    size: size,
                    color: color,
                    price: price,
                    store_type: store_type,

                }, function(response) {
                    $('#demo').html(response)
                });
                return false;
            },

        });
    });
</script>
<?php include_once("../../footer.php"); ?>