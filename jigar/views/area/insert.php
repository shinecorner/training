<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Insert form Of Area</h2>
    <form action="<?php echo '/controller/area/store.php' ?>" method="post">


        <div class="form-group">
            <label for="shape">Select Shape :</label>
            <select class="form-control" name="shape" id="shape">
                <option value="select">select</option>
                <option value="circle">circle</option>
                <option value="square">square</option>
                <option value="rectangle">rectangle</option>
                <option value="triangle">triangle</option>
            </select>
        </div>

        <div class="form-group" id="circle_input" style="display: none;">
            <label for="radius">Circle Area:</label>
            <input type="text" name="radius" id="radius" class="form-control" placeholder="Enter Radius">
        </div>

        <div class="form-group" id="square_input" style="display: none;">
            <label for="square_input">Square Area:</label>
            <input type="text" name="size" id="size" class="form-control" placeholder="Enter Size">
        </div>

        <div class="form-group" id="rectangle_input" style="display: none;">
            <label for="rectangle_input">Rectangle Area:</label>
            <input type="text" name="length" id="length" class="form-control" placeholder="Enter Length">
            <input type="text" name="width" id="width" class="form-control" placeholder="Enter Width">
        </div>

        <div class="form-group" id="triangle_input" style="display: none;">
            <label for="triangle_input">Triangle Area:</label>
            <input type="text" name="height" id="height" class="form-control" placeholder="Enter Height">
            <input type="text" name="base" id="base" class="form-control" placeholder="Enter Base">
        </div>

        <button type="button" name="btn_submit" id="btn_submit" class="btn btn-primary">Submit</button>
        <div class="form-group" id="value">

        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#shape').change(function() {

            if ($(this).val() == "circle") {
                // alert("hello");
                $("#circle_input").show();
                $("#square_input").hide();
                $("#rectangle_input").hide();
                $("#triangle_input").hide();


            } else if ($(this).val() == "square") {

                $("#square_input").show();
                $("#circle_input").hide();
                $("#rectangle_input").hide();
                $("#triangle_input").hide();


            } else if ($(this).val() == "rectangle") {

                $("#rectangle_input").show();
                $("#square_input").hide();
                $("#circle_input").hide();
                $("#triangle_input").hide();



            } else if ($(this).val() == "triangle") {


                $("#triangle_input").show();
                $("#square_input").hide();
                $("#rectangle_input").hide();
                $("#circle_input").hide();


            }


            // if (('#shape').val() == 'circle') {
            //     let pass_params = {
            //         radius: $('#radius').val()
            //     }
            // };
            // else if (('#shape').val() == 'square') {
            //     let pass_params = {
            //         size: $('#size').val()
            //     }
            // };
            // else if (('#shape').val() == 'rectangle') {
            //     let pass_params = {
            //         length: $('#length').val(),
            //         width: $('#width').val()
            //     }
            // };
            // else if (('#shape').val() == 'triangle') {
            //     let pass_params = {
            //         height: $('#height').val(),
            //         base: $('#base').val()
            //     }
            // };




        });
        $('#btn_submit').click(function() {
            // alert($('#shape').val());
            if ($('#shape').val() == 'circle') {
                
                var pass_params = {
                    radius: $('#radius').val(),
                    shape:$('#shape').val()
                };
            } else if ($('#shape').val() == 'square') {
                var pass_params = {
                    size: $('#size').val(),
                    shape:$('#shape').val()
                };
            } else if ($('#shape').val() == 'rectangle') {
                var pass_params = {
                    length: $('#length').val(),
                    width: $('#width').val(),
                    shape:$('#shape').val()
                };
            } else if ($('#shape').val() == 'triangle') {
                var pass_params = {
                    height: $('#height').val(),
                    base: $('#base').val(),
                    shape:$('#shape').val()
                };
            }
            // console.log(pass_params);
            $.post('/controller/area/store.php', pass_params, function(response) {
                $('#value').html(response);
            });
            return false;
        });
    });
</script>
<?php include_once("../../footer.php"); ?>