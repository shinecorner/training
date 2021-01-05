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
        <h2>Insert form Of Property</h2>
        <form action="<?php echo '/controller/property/insert.php' ?>" method="post">
            <input type="hidden" name="id" />

            <div class="form-group">
                <label for="type">Type :</label>
                <select class="form-control" name="type" id="type">
                    <option value="flat">Flat</option>
                    <option value="shop">Shop</option>
                    <option value="office">Office</option>
                    
                </select>
            </div>

            <div class="form-group">
                <label for="sq_feet">Square Feet:</label>
                <input type="text" name="sq_feet" id="sq_feet" class="form-control" placeholder="Enter Square Feet">
            </div>

            <div class="form-group">
                <label for="direction">Type :</label>
                <select class="form-control" name="direction" id="direction">
                    <option value="north">North</option>
                    <option value="south">South</option>
                    <option value="east">East</option>
                    <option value="west">West</option>
                </select>
            </div>

            <div class="form-group">
                <label for="discription">Discription:</label>
                <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription"></textarea>
            </div>

            <div class="form-group">
                <label for="is_sold">Is Sold:</label>
                <input type="checkbox" checked class="form-control" value="1" name="is_sold" id="is_sold">
            </div>

            <div class="form-group">
                <label for="evidance_date"> Evidance Date:</label>
                <input type="date" name="evidance_date" class="form-control" id="evidance_date">
            </div>


            <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>