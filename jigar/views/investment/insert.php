<?php include_once("../../header.php"); ?>

<div class="container">
    <h2>Insert form Of Area</h2>
    <form action="<?php echo '/controller/investment/store.php' ?>" method="post">

        <div class="form-group">
            <label for="amount">Investment Amount:</label>
            <input type="amount" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
        </div>

        <div class="form-group">
            <label for="invest">Investment Option :</label>
            <select class="form-control" name="invest" id="invest">
                <option value="fd">fd</option>
                <option value="stock">stock</option>

            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="stock_list" id="stock_list" style="display: none;">
                <option value="tcs">tcs</option>
                <option value="adani">adani</option>
                <option value="reliance">reliance</option>
                <option value="ajanta">ajanta</option>
                <option value="birla">birla</option>
            </select>
        </div>

        <button type="button" name="btn_submit" id="btn_submit" class="btn btn-primary">Submit</button>
        <div class="form-group" id="value">

        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#invest').change(function() {

            if ($(this).val() == "stock") {
                // alert("hello");
                $("#stock_list").show();

            }
             else if ($(this).val() == "fd") {
                // alert("hello");
                $("#stock_list").hide();

            }

        });

        $('#btn_submit').click(function() {
            // alert($('#shape').val());
            if ($('#invest').val() == 'fd') {
                var pass_params = {
                    amount: $('#amount').val(),
                    invest: $('#invest').val()
                }
            }
            else if ($('#invest').val() == 'stock') {
                var pass_params = {
                    amount: $('#amount').val(),
                    invest: $('#invest').val(),
                    stock_list: $('#stock_list').val(),
                }
            }

            $.post('/controller/investment/store.php', pass_params, function(response) {
                $('#value').html(response);
            });
            return false;

        });
    });
</script>
<?php include_once("../../footer.php"); ?>