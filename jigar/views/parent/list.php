<!DOCTYPE html>
<html>

<head>
    <title>Inquiry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/vendor/jquery-validation-1.19.2/dist/jquery.validate.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>

    <!-- <script src="jquery-3.5.1.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".cdelete").click(function() {
                let id = $(this).data("id");
                if (confirm("Do you want to delete")) {

                    window.location.href = "/controller/order/delete.php?id=" + id;
                } else {
                    console.log("not deleted");
                }
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div>

            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Parent_id</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($data as $key => $row) : ?>

                            <tr>
                                <td scope="row"><?php echo $row['id']; ?></td>
                                <td value="<?php $row['parent_id']; ?>"><?php echo $row['name2']; ?></td>
                                <td><?php echo $row['name1']; ?></td>
                                

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <?php include_once("../../footer.php"); ?>