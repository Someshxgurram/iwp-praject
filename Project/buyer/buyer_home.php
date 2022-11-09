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
        <iframe name="votar" style="display:none;"></iframe>
        <form action="#" method="POST" enctype="multipart/form-data" class="search">
            <input type="text" name="book_name" placeholder="Search" required>
            <input type="submit" name="submit" class="fa" value="&#xf002;" onclick="con4()">
        </form>
    </center>
    <center>
        <div class="container close" id="container5">
            <?php
            $book = '';
            if (isset($_POST['submit'])) {
                $book = $_POST['book_name'];
                //$_SESSION['book'] = $book;
                // header('location:buy_now.php');
                $book_query = "SELECT * from bproducts where item_name = '$book'";
                $result = mysqli_query($conn, $book_query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/BOOKS COVER/' . strtolower($row['item_name']) . '.jpg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                        echo "<h2>" . $row['item_name'] . "</h2>";
                        echo "<span>" . $row['item_desc'] . "</span>";
                        echo "<h2> &#8377;" . $row['item_price'] . "</h2>";
                        echo '<br>
                                    <a href="buy_now.php?item_name=';
                        echo $row['item_name'];
                        echo '"name="submit">Buy Now</a>
                            </form>';
                        echo '</div>
                    </div>
                </div>';
                    }
                }

                $book_query1 = "SELECT * from dproducts where item_name = '$book'";
                $result1 = mysqli_query($conn, $book_query1);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/' . $row['filename'] . '" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                        echo "<h2>" . $row['item_name'] . "</h2>";
                        echo "<span>" . $row['item_desc'] . "</span>";
                        echo '<br>
                                    <a href="buy_now.php?item_name=';
                        echo $row['item_name'];
                        echo '"name="submit">Buy Now</a>
                            </form>';
                        echo '</div>
                    </div>
                </div>';
                    }
                }
            }
            ?>
        </div>
    </center>
    <center>
        <div class="container" id="container1">
            <?php

            $book_query = "SELECT * from bproducts";
            $result = mysqli_query($conn, $book_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/BOOKS COVER/' . strtolower($row['item_name']) . '.jpg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo "<h2> &#8377;" . $row['item_price'] . "</h2>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }

            $book_query1 = "SELECT * from dproducts";
            $result1 = mysqli_query($conn, $book_query1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/' . $row['filename'] . '" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </center>
    <center>
        <div class="container close" id="container2">
            <?php

            $book_query = "SELECT * from bproducts where item_cat='non-fiction'";
            $result = mysqli_query($conn, $book_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/BOOKS COVER/' . strtolower($row['item_name']) . '.jpg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo "<h2> &#8377;" . $row['item_price'] . "</h2>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }

            $book_query1 = "SELECT * from dproducts where item_cat='non-fiction'";
            $result1 = mysqli_query($conn, $book_query1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/' . $row['filename'] . '" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </center>
    <center>
        <div class="container close" id="container3">
            <?php

            $book_query = "SELECT * from dproducts where item_cat='notes' OR item_cat = 'textbook'";
            $result = mysqli_query($conn, $book_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/' . $row['filename'] . '" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo "<h2> &#8377;" . $row['item_price'] . "</h2>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }

            $book_query1 = "SELECT * from bproducts where item_cat='notes' OR item_cat = 'textbook'";
            $result1 = mysqli_query($conn, $book_query1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/BOOKS COVER/' . strtolower($row['item_name']) . '.jpg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </center>
    <center>
        <div class="container close" id="container4">
            <?php

            $book_query = "SELECT * from bproducts where item_cat='fiction'";
            $result = mysqli_query($conn, $book_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/BOOKS COVER/' . strtolower($row['item_name']) . '.jpg" alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo "<h2> &#8377;" . $row['item_price'] . "</h2>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }

            $book_query1 = "SELECT * from dproducts where item_cat='fiction'";
            $result1 = mysqli_query($conn, $book_query1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo '<div class="card-conatiner">
                        <div class="card">
                            <form action="" method="POST">
                                <div class="img-div">
                                    <img src="./images/' . $row['filename'] . '"alt="book">
                                </div>
                                <ul class="rating">
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star"></i></a></li>
                                    <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <div class="book-info">';
                    echo "<h2>" . $row['item_name'] . "</h2>";
                    echo "<span>" . $row['item_desc'] . "</span>";
                    echo '<br>
                                    <a href="buy_now.php?item_name=';
                    echo $row['item_name'];
                    echo '"name="submit">Buy Now</a>
                            </form>';
                    echo '</div>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </center>
    <div class="choices" id="choicem">
        <a class="fa fa-caret-square-o-right" id="choice" onclick="choice()"></a>
        <a onclick="con1()"><i class="fa fa-book"></i><span>Non-Fiction</span></a>
        <a onclick="con2()"><i class="fa fa-mortar-board"></i><span>Study Materials</span></a>
        <a onclick="con3()"><i class="fa fa-rocket"></i><span>Fiction</span></a>
    </div>
    <script src="buyer_home.js"></script>
</body>

</html>