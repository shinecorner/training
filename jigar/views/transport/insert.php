<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Insert form Of Transportation:</h2>
    <form action="<?php echo '/controller/transport/store.php' ?>" method="post">



        <div class="form-group">
            <label for="transport">Transaport Option :</label>
            <select class="form-control" name="transport" id="transport">
                <option value="road">By Road</option>
                <option value="sea">By Sea</option>
                <option value="air">By Air</option>

            </select>
        </div>
        <div class="form-group">
            <label for="km">Kilometer:</label>
            <input type="km" name="km" id="km" class="form-control" placeholder="Enter Lilometer">
        </div>


        <button type="button" name="btn_submit" id="btn_submit" class="btn btn-primary">Submit</button>
        <div class="form-group" id="value">

        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn_submit').click(function() {
            // alert($('#shape').val());
            if ($('#transport').val() == 'road') {
                var access = {
                    transport: $('#transport').val(),
                    km: $('#km').val()
                }
            } else if ($('#transport').val() == 'sea') {
                var access = {
                    transport: $('#transport').val(),
                    km: $('#km').val()
                }
            } else if ($('#transport').val() == 'air') {
                var access = {
                    transport: $('#transport').val(),
                    km: $('#km').val()
                }
            }

            $.post('/controller/transport/store.php', access, function(response) {
                $('#value').html(response);
            });
            return false;

        });
    });
</script>
<?php include_once("../../footer.php"); ?>