<?php include_once("../../header.php"); ?>

<script type="text/javascript">

// function addMorePhone()
// {
//     var p_container = document.getElementById("phone_container");
//     p_container.innerHTML += ' <div class="form-group">' + 
//                 '<label for="phone">Phone</label>' +
//                 '<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your Phone">' +
//             '</div>';
//     // console.log(p_container);
// }

$(document).ready(function(){
   $("#add_more").click(function(){
      $("#phone_container").append(' <div class="form-group">' + 
                '<label for="phone">Phone</label>' +
                '<input type="text" name="phone[]" class="form-control" id="phone" placeholder="Enter your Phone">' +
            '</div>');
    //    alert("snehal");
   });
    // console.log("snehal");
});
</script>

<h2>New Customer</h2>
<div class="row">
    <div class="col-6">
        <form action="/controller/customer_phone/store.php" method="post">        
            <div class="form-group">
                <label for="fname">Frist Name</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone[]" class="form-control" id="phone" placeholder="Enter your Phone">
            </div>
            <div id="phone_container">
            </div>
            <div class="form-group">             
                <!-- <button type="button"  class="btn btn-secondary" id="add_more" onclick="addMorePhone()">Add More Phone </button> -->
                 <button type="button"  class="btn btn-secondary" id="add_more">Add More Phone </button>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php include_once("../../footer.php"); ?>