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
    <title>Buyer - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="buyer_home.css">
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
    <center>
        <form action="" method="POST" enctype="multipart/form-data" class="search">
            <input type="text" name="book_name" placeholder="Search">
            <input type="submit" name="submit" class="fa" value="&#xf002;">
        </form>
    </center>
    <?php
    if (isset($_POST['submit'])) {
        $book = $_POST['book_name'];
        $_SESSION['book'] = $book;
        header('location:buy_now.php');
    }
    ?>
    <center>
        <?php

        $book_query = "SELECT * from bproducts";
        $result = mysqli_query($conn, $book_query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="container">
                    <div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/book.jpeg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">
                                    <?php
                                    echo "<h2>", $row['item_name'], "</h2>";
                                    echo "<span>", $row['item_desc'], "</span>";
                                    echo "<h2>", $row['item_price'], "</h2>";
                                    ?>
                                    <br>
                                    <a href="buy_now.php">Buy Now</a>
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                $book = $_POST['book_name'];
                                $_SESSION['book'] = $book;
                                header('location:buy_now.php');
                            }
                            ?>
                        </div>
                    </div>
                </div>
                </div>
        <?php
            }
        }

        ?>
        </div>
    </center>
    <div class="choices" id="choicem">
        <a class="fa fa-caret-square-o-right" id="choice" onclick="choice()"></a>
        <a><i class="fa fa-book"></i><span>Non-Fiction</span></a>
        <a><i class="fa fa-mortar-board"></i><span>Study Materials</span></a>
        <a><i class="fa fa-rocket"></i><span>Fiction</span></a>
    </div>
    <script src="buyer_home.js"></script>
</body>

</html>