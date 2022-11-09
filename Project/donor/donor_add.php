<?php
include('../includes/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor - Add Items</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="donor_add.css">
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
                <li><a href="donor_list.php"><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="donor_sold.php"><i class="fa fa-handshake-o "></i><span>Donated Items</span></a></li>
                <li><a href="donor_add.php"><i class="fa fa-plus-square"></i><span>Add Items</span></a></li>
                <li><a href="donor_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="donor_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form action="#" method="POST" name="donor_add" enctype="multipart/form-data">
            <h2>Enter The Book Details</h2>
            <input type="text" name="title" id="title" placeholder="Enter the title" required>
            <input type="text" name="desc" id="desc" placeholder="Enter the description">
            <!--             <input type="text" name="cat" id="cat" placeholder="Enter the category"> -->
            <p>Select the Category</p>
            <select name="cat" id="cat">
                <option value="fiction">Fiction</option>
                <option value="nonfiction">Non Fiction</option>
                <option value="notes">Notes</option>
            </select>
            <p>Upload Book Image</p>
            <br>
            <input type="file" class="input_file" name="uploadfile" placeholder="Choose Image">
            <input type="submit" name="submit" value="Add Item">
        </form>
        <?php

        if (isset($_POST['submit'])) {


            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "./images/" . $filename;




            $item_name = $_POST['title'];
            $item_desc = $_POST['desc'];
            $item_cat = $_POST['cat'];
            $donor = $_SESSION['username'];
            $customer = "none";
            $insert_query = "INSERT INTO dproducts (filename,item_name, item_desc, item_cat,donor,customer) VALUES ('$filename','$item_name', '$item_desc', '$item_cat','$donor','$customer')";

            $result_insert = mysqli_query($conn, $insert_query);

            if ($result_insert and move_uploaded_file($tempname, $folder)) {
                echo "<h2 id='addtion'>", $item_name, " has been added!</h2>";
            }
        } ?>
    </div>
    <script src="donor_add.js"></script>
</body>

</html>