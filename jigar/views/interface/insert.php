<?php include_once("../../header.php"); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#log_type').change(function() {
            // $(this).val()
            $.post('/controller/interface/store.php', {
                log_type: $(this).val()
            }, function(response) {
                
            })
        })
    })
</script>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="<?php echo '../../controller/interface/store.php' ?>" method="post">
                <div class="form-group">
                    <label for="log_type">Logable</label>
                    <select class="custom-select custom-select-lg mb-3" name="log_type" id="log_type">
                        <option value="">Select Type</option>
                        <option value="database"> Database </option>
                        <option value="file">file</option>
                    </select>
                </div>
                <div id="modal-type-detail">

                </div>
            </form>
        </div>
    </div>
</div>