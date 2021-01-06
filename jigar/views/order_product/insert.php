<?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Order Product form</h2>
        <form action="<?php echo '../../controller/order_product/store.php' ?>" method="post">
        <div class="form-group">
                <label for="order">Order </label>
                <select  name="order" class="form-control" id="order">
                    <?php foreach ($orderdata as $key => $val) :  ?>
                        <option value="<?php echo $val['id'] ?>"> <?php echo $val['transaction_num'] . "-" . $val['total']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>    

            <div class="form-group">
                <label for="product">Product </label>
                <select multiple name="product[]" class="form-control" id="product">
                    <?php foreach ($productdata as $key => $value) :  ?>
                        <option value="<?php echo $value["id"]; ?>"> <?php echo $value["name"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            

            <button type="submit"  class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php include_once("../../footer.php"); ?>