    <?php include_once("../../header.php"); ?>

    <h2>Customer List</h2>
    <a href="/views/customer/insert.php" class="btn btn-primary">Insert Customer</a><br />
    <br />
    <?php $url = "/controller/customer/list.php?1=1" ?>
    <form align="center" method="get" action="/controller/customer/list.php">
        <input type="text" name="filter_input" value="<?php echo $filter_input; ?>" id="filter_input">
        <input type="submit" name="search" value="search">
        <button class="btn btn-danger" href="<?php echo $base_url ?>" value="Reset">
            <a href="<?php echo $base_url ?>"> Reset </a> </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td> <a href=" <?php echo '/controller/customer/delete.php?id='.$row['id']?>"
                            class="btn btn-primary">Delete</a>
                        <a href="<?php echo '/controller/customer/edit.php?id='.$row['id']?>"
                            class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
        <ul class="pagination">
            <?php if($page_no > 1): ?>
            <?php $url  .= "&page_no=1" ?>
            <?php $url .= (!empty($filter_input)) ? "&filter_input=$filter_input&search=search" : '' ; ?>
            <li class="page-item"><a class="page-link" href="<?php echo $url ?>">First Page</a></li>
            <?php endif ; ?>

            <li <?php echo ($page_no <= 1) ? "class='page-item disabled'"  : 'page-item' ; ?>>
                <?php if($page_no > 1) : ?>
                <?php $url .=  "&page_no=$previous_page"; ?>
                <?php $url .= (!empty($filter_input)) ? "&filter_input=$filter_input&search=search" : '' ; ?>
                <a class="page-link" href="<?php echo $url ?>">Previous</a>
                <?php endif ;?>
            </li>
            <?php if ($total_no_of_pages <= 10) : ?>
            <?php for ($counter = 1; $counter <= $total_no_of_pages; $counter++) : ?>
            <?php if ($counter == $page_no) : ?>
            <li class='active'><a class="page-link"><?php echo $counter; ?></a></li>
            <?php else : ?>
            <?php $url .= "&page_no=$counter"; ?>
            <?php $url .= (!empty($filter_input)) ? "&filter_input=$filter_input&search=search" : '' ; ?>
            <li><a class="page-link" href="<?php echo $url; ?>"><?php echo $counter; ?></a></li>
            <?php endif ; ?>
            <?php endfor ; ?>
            <?php endif ; ?>

            <li <?php echo ($page_no >= $total_no_of_pages) ? "class='page-item disabled'" : 'page-item'; ?>>
                <?php if($page_no < $total_no_of_pages) : ?>
                <?php $url .= "&page_no=$next_page" ?>
                <?php $url .= (!empty($filter_input)) ? "&filter_input=$filter_input&search=search" : '' ; ?>
                <a class="page-link" href="<?php echo $url ?>">Next</a>
                <?php endif ; ?>
            </li>

            <?php if($page_no < $total_no_of_pages) : ?>
            <?php $url .= "&page_no=$total_no_of_pages"; ?>
            <?php $url .= (!empty($filter_input)) ? "&filter_input=$filter_input&search=search" : '' ; ?>
            <li class="page-item"><a class="page-link" href="<?php echo $url ?>">Last</a></li>
            <?php endif ?>
        </ul>

        <?php include_once("../../footer.php"); ?>
        <!-- </body>
</html> -->