<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2>Inquiry form</h2>
        <form action="<?php echo '../../controller/inquiry/update.php' ?>" method="post">
        <div class="form-group">
        <input type="hidden" name="property" value="<?php echo $selected_property; ?>" />
        <label for="property">Property </label>
                <select disabled class="form-control" id="property">
                    <?php foreach ($propertydata as $key => $val) :  ?>
                        <option <?php echo ($val['id'] == $selected_property) ? 'selected': '' ?> value="<?php echo $val['id'] ?>"> <?php echo $val['type'] . "-" . $val['sq_feet']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>    

            <div class="form-group">
                <label for="customer">Customer </label>
                <select multiple name="customer[]" class="form-control" id="customer">
                    <?php foreach ($customerdata as $key => $value) :  ?>
                        <option <?php echo(in_array($value['id'], $selected_customer)) ? 'selected': ''?> value="<?php echo $value["id"]; ?>"> <?php echo $value["firstname"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>