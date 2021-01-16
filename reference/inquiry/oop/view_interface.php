<?php include_once("../header.php"); ?>
<script type="text/javascript">
    $(document).ready(function (){
        $('#car_type').change(function (){
            // $(this).val()
            $.post('/oop/interface.php',{modal: $(this).val()}, function (response){
                $('#modal-type-detail').html(response);
            })
        })
    })
</script>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="/oop/interface.php" method="post">
                <div class="form-group">
                    <label for="fname">Car Modal</label>
                    <select class="custom-select custom-select-lg mb-3" name="car_type" id="car_type">
                        <option value="">Select car Type</option>
                        <option value="electric">Electric Car</option>
                        <option value="petrol">Petrol Car</option>
                        <option value="cng">CNG Car</option>
                    </select>
                </div>
                <div id="modal-type-detail">

                </div>
            </form>
        </div>
    </div>
</div>
