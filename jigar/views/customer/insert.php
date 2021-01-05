<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script>
    function loadDoc() {
      const form = document.getElementById( "myForm" );
      const FD = new FormData( form );
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
      } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('demo').innerHTML = this.responseText;

        }
      };
      xmlhttp.open("POST","ajax_info.php");

      xmlhttp.send(FD);
    }
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>

  <div class="container">
    <h2>Insert form</h2>
    <form action="<?php echo '/controller/customer/ajax_info.php' ?>" method="post" id="myForm">

      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name">
      </div>
      <button type="button" name="btn_submit" class="btn btn-primary" onclick="loadDoc()">Submit</button>
      <div class="form-group" id="demo">
                
       
      </div>
    </form>
  </div>

</body>

</html>