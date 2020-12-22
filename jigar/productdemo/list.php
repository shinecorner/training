<?php
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;
?>

<table class="table" border="1px" align="center">
    <thead>
        <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Product Name</th>
        </tr>
    </thead>

    <tbody>


        <?php

       

        $select = "select category.id as cat_id,category.name as cat_name,product.name as prod_name,product.id as prod_id
                    from category left join product on category.id = product.category_id";

        $query = mysqli_query($con, $select) or die(mysqli_error($con));

        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        // print_r($data);
        // exit;
        $input = [];

        foreach ($data as $key => $value) {
            $input[$value["cat_id"]]["cat_id"] = $value["cat_id"];
            $input[$value["cat_id"]]["cat_name"] = $value["cat_name"];
            $input[$value["cat_id"]]["prod_name"][$value['prod_id']] = $value["prod_name"];
        }
        // print_r($input);
        // exit;
        
    
        // print_r($input);
        // exit;
        ?>
        <?php foreach ($input as $row) : ?>
    
          <tr>
            <td><?php echo $row['cat_id']; ?></td>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo implode(",",$row['prod_name']); ?></td>
    
          </tr>
        <?php endforeach; ?>
    
    
    
      </tbody>
    </table>
    