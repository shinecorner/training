<?php include_once("../../header.php"); ?>


    <div class="container">
        <h2>Inquiry form</h2>
        <form action="<?php echo '../../controller/inquiry/store.php' ?>" method="post">
        <div class="form-group">
                <label for="property">Property </label>
                <select  name="property" class="form-control" id="property">
                    <?php foreach ($propertydata as $key => $val) :  ?>
                        <option value="<?php echo $val['id'] ?>"> <?php echo $val['type'] . "-" . $val['sq_feet']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>    

            <div class="form-group">
                <label for="customer">Customer </label>
                <select multiple name="customer[]" class="form-control" id="customer">
                    <?php foreach ($customerdata as $key => $value) :  ?>
                        <option value="<?php echo $value["id"]; ?>"> <?php echo $value["firstname"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            

            <button type="submit"  class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>