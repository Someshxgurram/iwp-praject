<?php
include('../includes/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer - Purchases</title>
    <link rel="stylesheet" href="buyer_purchase.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="nav">
        <div class="title">
            <div class="logo">
                <h1>SecondPages</h1>
                <img src="images/logo.png" class="logo" alt="logo">
            </div>
            <div class="bar">
                <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
            </div>
        </div>
        <div class="menu" id="menu">
            <ul>
                <li><a href="buyer_home.php"><i class="fa fa-home "></i><span>Home</span></a></li>
                <li><a href="buyer_account.php"><i class="fa fa-user-circle "></i><span>Account</span></a></li>
                <li><a href="buyer_purchase.php"><i class="fa fa-cart-arrow-down "></i><span>Purchases</span></a></li>
                <li><a href="buyer_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="buyer_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
  <ul class="table">
    <li class="table-header">
      <div class="col col-1">Book title</div>
      <div class="col col-2">Discription</div>
      <div class="col col-3">Category</div>
      <div class="col col-4">Price</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Book Title">Percy Jackson</div>
      <div class="col col-2" data-label="Discription">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem praesentium necessitatibus provident expedita sunt. Qui corporis, nemo, fuga cupiditate ab numquam sapiente velit corrupti rerum in, perferendis hic dolore temporibus!</div>
      <div class="col col-3" data-label="Category">Story</div>
      <div class="col col-4" data-label="Price">&#8377;700</div>
    </li>
    <li class="table-row">
    <div class="col col-1" data-label="Book Title">Organic Chemistry</div>
      <div class="col col-2" data-label="Discription">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem praesentium necessitatibus provident expedita sunt. Qui corporis, nemo, fuga cupiditate ab numquam sapiente velit corrupti rerum in, perferendis hic dolore temporibus!</div>
      <div class="col col-3" data-label="Category">Notes</div>
      <div class="col col-4" data-label="Price">&#8377;200</div>
    </li>
    <li class="table-row">
    <div class="col col-1" data-label="Book Title">Harry Poter</div>
      <div class="col col-2" data-label="Discription">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem praesentium necessitatibus provident expedita sunt. Qui corporis, nemo, fuga cupiditate ab numquam sapiente velit corrupti rerum in, perferendis hic dolore temporibus!</div>
      <div class="col col-3" data-label="Category">Story</div>
      <div class="col col-4" data-label="Price">&#8377;700</div>
    </li>
    <li class="table-row">
    <div class="col col-1" data-label="Book Title">Maze Runner</div>
      <div class="col col-2" data-label="Discription">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem praesentium necessitatibus provident expedita sunt. Qui corporis, nemo, fuga cupiditate ab numquam sapiente velit corrupti rerum in, perferendis hic dolore temporibus!</div>
      <div class="col col-3" data-label="Category">Story</div>
      <div class="col col-4" data-label="Price">&#8377;700</div>
    </li>
  </ul>
</div>
    <script src="buyer_purchase.js"></script>
</body>

</html>