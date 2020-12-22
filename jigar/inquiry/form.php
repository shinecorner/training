<?php

$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;
// error_reporting(0);



?>
<?php

$c_query = "select * from customer";
$resultC = mysqli_query($con, $c_query);

$customerdata = mysqli_fetch_all($resultC,   MYSQLI_ASSOC);

// print_r($customerdata);
// exit;
$p_query = "select * from property";
$resultP = mysqli_query($con, $p_query);

$propertydata = mysqli_fetch_all($resultP, MYSQLI_ASSOC);



if (isset($_POST['btn_submit'])) {

    // print_r($_POST);
    // exit;
    $insert = "insert into customer_property values('','$_POST[ddl_property]','$_POST[ddl_customer]')";
    
    // echo $insert;
    // exit;
    $query = mysqli_query($con, $insert);

    // var_dump($query);
    // exit;
    // $customerdata = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // print_r($data);
    if ($query) {
?>

        <script>
            alert("Insert Successfully");
        </script>
<?php
    }
}



?>
<html>

<head>
    <title> Inquiry Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <div class="col-sm">
                <label for="">Customer ID</label>
                <select class="browser-default custom-select" name="ddl_customer">
                    <?php foreach ($customerdata as $key => $value) :  ?>

                        <option value="<?php echo $value["id"]; ?>"> <?php echo $value["firstname"]; ?> </option>
                    <?php endforeach; ?>

                </select>

            </div>

        </div>
        <div class="row">
            <div class="col-sm">
                <label for="">Property ID</label>
                <select class="browser-default custom-select" name="ddl_property">
                    <?php foreach ($propertydata as $key => $val) :  ?>

                        <option value="<?php echo $val['id'] ?>"> <?php echo $val['type'] . "-" . $val['sq_feet']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <button type="submit" name="btn_submit" class="btn btn-primary">Primary</button>
            </div>
        </div>
    </form>
</div>

</html>