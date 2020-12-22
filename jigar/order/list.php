<?php

$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

?>




<table class="table" border="1px" align="center">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Transaction Number</th>
            <th scope="col">Total</th>
            <th scope="col">Product Name</th>
        </tr>
    </thead>
    <tbody>

        <?php


        ///ORDER
        // or die(mysqli_error($con))

        $select = "select orders.id as ord_id,orders.transaction_num,orders.total,product.id as prod_id,product.name,
                    category.name as catname
                    from ((orders
                    left join order_product on orders.id = order_product.order_id)
                    left join product on product.id = order_product.product_id)
                    left join category on product.category_id = category.id";


        $query = mysqli_query($con, $select) or die(mysqli_error($con));

        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);


        $input = [];
       
        foreach ($data as $key => $value) {
            $catname = $value['catname'];
            $input[$value["ord_id"]]["order_id"] = $value["ord_id"];
            $input[$value["ord_id"]]["transaction_num"] = $value["transaction_num"];
            $input[$value["ord_id"]]["total"] = $value["total"];
            $input[$value["ord_id"]]["name"][$value['prod_id']] = $value["name"]."(".$catname.")";
        }

        // print_r($data);
        // exit;


        ?>


        <?php foreach ($input as $key => $row): ?>
            
            <tr>


                <td> <?php echo $key; ?></td>
                <td> <?php echo $row['transaction_num']; ?> </td>
                <td> <?php echo $row['total']; ?></td>
                <td> <?php echo implode(",", $row['name']); ?></td>


            </tr>
        <?php endforeach; ?>

    </tbody>
</table>






</tbody>


<!-- 
addslashes
print_r(explode)
html_entity_decode
implode
join
nl2br
trim
printf
sprintf
str_reperat
str_replace
strlen
strpos
substr
ucfirstt
strstr -->
