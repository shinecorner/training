    <?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Customer List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['size'] ?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <?php include_once("../../footer.php"); ?>