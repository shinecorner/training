<?php include_once("../../header.php"); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#area_type').change(function() {
        if ($(this).val() == 'cricle') {
            $("#cricle").show();
            $("#squre").hide();
            $("#rectangle").hide();
            $("#triangle").hide();
        } else if ($(this).val() == 'squre') {
            $("#cricle").hide();
            $("#squre").show();
            $("#rectangle").hide();
            $("#triangle").hide();
        } else if ($(this).val() == 'rectangle') {
            $("#cricle").hide();
            $("#squre").hide();
            $("#rectangle").show();
            $("#triangle").hide();
        } else if ($(this).val() == 'triangle') {
            $("#cricle").hide();
            $("#squre").hide();
            $("#rectangle").hide();
            $("#triangle").show();
        }
    });
    $("#submit_btn").click(function() {
        if ($('#area_type').val() == 'cricle') {
            var pass_params = {
                radius: $('#radius').val(),
                area_type: $('#area_type').val()
            };
        } else if ($('#area_type').val() == 'squre') {
            var pass_params = {
                area_type: $('#area_type').val(),
                size: $('#size').val()
            };
        } else if ($('#area_type').val() == 'rectangle') {
            var pass_params = {
                area_type: $('#area_type').val(),
                length: $('#length').val(),
                width: $('#width').val()
            };
        } else if ($('#area_type').val() == 'triangle') {
            var pass_params = {
                area_type: $('#area_type').val(),
                base: $('#base').val(),
                height: $('#height').val()
            };
        }
        $.post('/controller/area/list.php', pass_params, function(response) {
            $('#area-type-detail').html(response);
        })
        return false;
    })
})
</script>
<div class="container">
    <h2>Area Calculates from</h2>
    <form action="<?php echo '/controller/area/list.php' ?>" id="dealForm" method="post">
        <div class="col-6">
            <div class="form-group">
                <label for="area_type">Enter your Shape</label>
                <select class="custom-select custom-select-lg mb-3" name="area_type" id="area_type">
                    <option value="">Select Your Shape</option>
                    <option value="cricle">Cricle</option>
                    <option value="squre">Squre</option>
                    <option value="rectangle">Rectangle</option>
                    <option value="triangle">Triangle</option>
                </select>
            </div>
            <div style="display: none" id="cricle" class="form-group">
                <label for="radius">Enter Your Radius Value</label>
                <input type="text" name="radius" id="radius" class="form-control" placeholder="Enter Your Radius Value">
            </div>
            <div style="display: none" id="squre" class="form-group">
                <label for="size">Enter Your Size Value</label>
                <input type="text" name="size" id="size" class="form-control" placeholder="Enter Your Size Value">
            </div>
            <div style="display: none" id="rectangle" class="form-group">
                <label for="length">Enter Your Length Value</label>
                <input type="text" name="length" id="length" class="form-control"
                    placeholder="Enter Your Length Value"><br>
                <label for="width">Enter Your Width Value</label>
                <input type="text" name="width" id="width" class="form-control" placeholder="Enter Your Width Value">
            </div>
            <div style="display: none" id="triangle" class="form-group">
                <label for="base">Enter Your Base Value</label>
                <input type="text" name="base" id="base" class="form-control" placeholder="Enter Your Base Value"> <br>
                <label for="height">Enter Your Height Value</label>
                <input type="text" name="height" id="height" class="form-control" placeholder="Enter Your Height Value">
            </div>

            <button type="button" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>

            <div id="area-type-detail">

            </div>


        </div>
    </form>
</div>

<?php include_once("../../footer.php"); ?>