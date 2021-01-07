    <?php include_once("../../header.php"); ?>
    <?php include_once("../../connection.php"); ?>
    <script type="text/javascript">
$(document).ready(function() {
    $("#check_ajax").click(function() {
        $.post("/ajax_posttest_category.php", {
                name: $("#name").val()
            },
            function(data, status) {
                var json = $.parseJSON(data);
                console.log(json.name);

                var html = '<tr>';
                html += '<td>' + json.id + '</td>';
                html += '<td>' + json.name + '</td></tr>';
                $('#container').append(html);
                // $("#container").html("ID: " + data);
            });
    })
});
    </script>

    <button type="button" id="check_ajax">Add</button>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/controller/category/store.php" method="post">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter your Category Name">
                    </div>
                </form>

            </div>

        </div>
        <?php 
    $sql = "select  * from category";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Categoryname</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="container">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <?php include_once("../../footer.php"); ?>