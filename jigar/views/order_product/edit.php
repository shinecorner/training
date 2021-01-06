<?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Order form</h2>
        <form action="<?php echo '../../controller/order_product/update.php' ?>" method="post">
        <div class="form-group">
        <input type="hidden" name="order" value="<?php echo $selected_order; ?>" />
        <label for="order">order </label>
                <select disabled class="form-control" id="order">
                    <?php foreach ($orderdata as $key => $val) :  ?>
                        <option <?php echo ($val['id'] == $selected_order) ? 'selected': '' ?> value="<?php echo $val['id'] ?>"> <?php echo $val['transaction_num'] . "-" . $val['total']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>    

            <div class="form-group">
                <label for="product">Product </label>
                <select multiple name="product[]" class="form-control" id="product">
                    <?php foreach ($productdata as $key => $value) :  ?>
                        <option <?php echo(in_array($value['id'], $selected_product)) ? 'selected': ''?> value="<?php echo $value["id"]; ?>"> <?php echo $value["name"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <?php include_once("../../footer.php"); ?>