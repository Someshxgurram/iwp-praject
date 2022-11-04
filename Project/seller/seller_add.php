<?php
include('../includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller - Add Items</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="seller_add.css">
</head>

<body>
    <div class="nav">
        <div class="menu" id="menu">
            <ul>
                <li><a href="seller_list.php"><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="seller_sold.php"><i class="fa fa-handshake-o "></i><span>Sold Items</span></a></li>
                <li><a href="seller_add.php" id="active"><i class="fa fa-plus-square "></i><span>Add Items</span></a></li>
                <li><a href="seller_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="seller_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <h2>Enter The Material Details</h2>
            <input type="text" name="title" id="title" placeholder="Enter the title" required>
            <input type="text" name="desc" id="desc" placeholder="Enter the description">
            <input type="text" placeholder="Enter the Price">
            <p>Upload Material Image</p>
            <input type="file" placeholder="Choose Image">
            <button>Add Item</button>
        </div>
    </div>
    <script src="seller_add.js"></script>
</body>

</html>