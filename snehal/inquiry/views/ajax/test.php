    <?php include_once("../../header.php"); ?>
    <?php include_once("../../connection.php"); ?>
    <script type="text/javascript">
$(document).ready(function() {
    $("#check_ajax").click(function() {
        // alert("ajax");
        // $.get("/ajax_gettest.php", function(data, status) {
        //     // alert("Data: " + data + "\nStatus: " + status);
        //     $("#container").html("Data: " + data + "\nStatus: " + status);
        // });
        // alert ($("#fname").val());
        $.post("/ajax_posttest.php", {
                fname: $("#fname").val(),
                lname: $("#lname").val()
            },
            function(data, status) {
                var json = $.parseJSON(data);
                // console.log(json.fname);

                var html = '<tr>';
                html += '<td>' + json.id + '</td>';
                html += '<td>' + json.fname + '</td>';
                html += '<td>' + json.lname + '</td></tr>';
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
                <form action="/controller/customer/store.php" method="post">
                    <div class="form-group">
                        <label for="fname">Frist Name</label>
                        <input type="text" name="fname" class="form-control" id="fname"
                            placeholder="Enter your First Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lname"
                            placeholder="Enter your Last Name">
                    </div>
                </form>

            </div>

        </div>
        <?php 
    $sql = "select  * from customer";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="container">
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    </div>
    <?php include_once("../../footer.php"); ?>