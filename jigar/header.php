<!DOCTYPE html>
<html>

<head>
  <title>Inquiry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="/asset/css/bootstrap.min.css.map"> -->
  
  <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/popper.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/vendor/jquery.dataTables.min.js"></script>
    <script src="/asset/vendor/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="/asset/vendor/dataTables.bootstrap4.min.css">
    

  <style>
    table {
      border-collapse: collapse;
    }

    .inline {
      display: inline-block;
      float: right;
      margin: 20px 0px;
    }

    input,
    button {
      height: 34px;
    }
/* 
    .pagination {
      display: inline-block;
    }

    .pagination a {
      font-weight: bold;
      font-size: 18px;
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      border: 1px solid black;
    }

    .pagination a.active {
      background-color: pink;
    }

    .pagination a:hover:not(.active) {
      background-color: skyblue; 
    } */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/controller/customer/list.php">Customer <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/property/list.php">Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/inquiry/list.php">Inquiry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/product/list.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/order/list.php">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/order_product/list.php">Order Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/category/list.php">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/controller/logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>