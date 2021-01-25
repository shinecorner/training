<?php include_once("../../header.php"); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#invert').change(function () {
                if ($(this).val() == 'stock') {
                    $("#instock").show();
                    // alert("snehal");
                } else {
                    $("#instock").hide();
                    // alert("patel");
                }
            });
            // alert("snehal");
            $("#submit_btn").click(function () {
                if ($('#invert').val() == 'fd') {
                    // alert("snehal");
                    var invert = {
                        amount: $("#amount").val(),
                        invert: $("#invert").val()
                        // invert: fd
                        // alert("snehal");
                    };
                } else if ($('#invert').val() == 'stock') {
                    var invert = {
                        amount: $("#amount").val(),
                        instock: $("#instock").val(),
                        invert: $("#invert").val()
                            // invert: stock
                        };
                }
                $.post('/controller/investment/list.php',invert, function (response) {
                    $('#invert-type-detail').html(response);
                })
                return false;
            })
        });
    </script>


    <div class="container">
        <h2>Deal form</h2>
        <form action="<?php echo '/controller/ajaxdeal/store.php' ?>" id="dealForm" method="post">
            <div class="col-6">
                <div class="form-group">
                    <label for="amount">Investment Amount</label>
                    <input type="text" name="amount" class="form-control" id="amount"
                           placeholder="Enter Your Investment Amount">
                </div>
                <div class="form-group">
                    <label for="invert">Select your Invertment Option</label>
                    <select class="custom-select custom-select-lg mb-3" name="invert" id="invert">
                        <option value="">Select Your Invertment Option</option>
                        <option value="fd">FD</option>
                        <option value="stock">Stock</option>
                    </select>
                </div>
                <div class="form-group" style="display: none" id="instock">
                    <label for="instock">Select your Invetment Stock Option</label>
                    <select class="custom-select custom-select-lg mb-3" name="instock" id="instock">
                        <option value="">Select Your Invetment Stock Option</option>
                        <option value="tatamotores">Tata Motores</option>
                        <option value="tcs">Tcs</option>
                        <option value="relicnes">Relicnes</option>
                        <option value="tavasoft">Tavasoft</option>
                        <option value="icici">ICICI</option>
                    </select>
                </div>

                <button type="button" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>

                <div id="invert-type-detail">

                </div>


            </div>
        </form>
    </div>

<?php include_once("../../footer.php"); ?>