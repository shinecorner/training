<?php include_once("../../header.php"); ?>

<h2>Customer List</h2>
<script type="text/javascript">
  var test = ['jigar', 'xyz'];
  $(document).ready(function() {
    $('#submit_btn').click(function() {

      let catname = $('#name').val()

      $.post("../../controller/ajax/store.php", {
        name: catname
      }, function(response) {
        console.log(response);
        detail = JSON.parse(response)

        var html = '<tr>';
        html += '<td>' + detail.id + '</td>';
        html += '<td>' + detail.name + '</td>';
        html += '</tr>';
        $('#category_list').append(html)
        // $( ".result" ).html( data );
      });
    });
  });
</script>
<div class="row">
  <div class="col-6">
    <form action="../../controller/ajax/store.php" method="post">
      <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Category Name">
      </div>

      <button type="submit" id="submit_btn" name="btn_submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>Category Name</th>
    </tr>
  </thead>
  <tbody id="category_list">
    <?php foreach ($category_data as $key => $row) : ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

<?php include_once("../../footer.php"); ?>