<?php include_once("../../header.php"); ?>

<script type="text/javascript">
    $(document).ready(function (){
        $('#submit_btn').click(function (){
            $.post('/controller/transport/list.php',{
                travel_type: $("#travel_type").val(),
                km: $("#km").val()
                // invert: stock
            }, function (response) {
                // console.log(response);
                $('#travel-type-detail').html(response);
            })
            return false;
        });
            // alert("snehal");
    });
</script>

    <div class="container">
        <h2>Tranporting from</h2>
        <div class="row">
            <div class="col-6">
                <form action="/controller/transport/list.php" id="travelForm" method="post">
                    <div class="form-group">
                        <label for="info">Traveling Type</label>
                        <select class="custom-select custom-select-lg mb-3" name="travel_type" id="travel_type">
                            <option value="">Select Tarveling Option</option>
                            <option value="road">By Road</option>
                            <option value="sea">By Sea</option>
                            <option value="air">By Air</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="km">How Many Kms to Travel</label>
                        <input type="text" name="km" class="form-control" id="km"
                               placeholder="Enter Your Traveling Kms">
                    </div>

                    <button type="button" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>

                    <div id="travel-type-detail">

                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once("../../footer.php"); ?>