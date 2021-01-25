<?php include_once("../../header.php"); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#logger_type').change(function() {
        // $(this).val()
        $.post('/controller/error/list.php', {
            logger: $(this).val()
        }, function(response) {
            $('#logger-type-detail').html(response);
        })
    })
})
</script>
<div class="container">
    <h2>Error Logger</h2>
    <div class="row">
        <div class="col-6">
            <form action="/oop/interface.php" method="post">
                <div class="form-group">
                    <label for="logger">Logger Type</label>
                    <select class="custom-select custom-select-lg mb-3" name="logger_type" id="logger_type">
                        <option value="">Select Logger Type</option>
                        <option value="database">DBLogger</option>
                        <option value="file">FileLogger</option>
                    </select>
                </div>
                <div id="logger-type-detail">

                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("../../footer.php"); ?>