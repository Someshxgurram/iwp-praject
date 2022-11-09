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
    <title>Buy_Now</title>
    <link rel="stylesheet" href="buy_now.css">
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
    <div class="content">
        <div class="container">
            <div class="image">
                <?php
                if (isset($_GET['item_name'])) {
                    $_SESSION['book'] = $_GET['item_name'];
                }
                $book_name = $_SESSION['book'];
                echo '<img src="./images/BOOKS COVER/' . strtolower($book_name) . '.jpg" alt="book">';
                ?>

            </div>
            <div class="details">
                <?php
                $search_query = "SELECT * FROM bproducts WHERE item_name = '$book_name'";
                $result = mysqli_query($conn, $search_query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<h1>", $row['item_name'], "</h1>";
                        $name = $row['item_name'];
                        $price = $row['item_price'];
                        echo "<h1> &#8377;", $row['item_price'], "</h1>";
                        echo "<h1> Description </h1>";
                        echo "<p>", $row['item_desc'], "</p>";
                    }
                } else {
                    echo "<h1> Not Possible </h1>";
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="submit" value="Buy Now" name="submit">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $username = $_SESSION['username'];
                    $update_query = "SELECT * from blogin where username = '$username'";
                    $update_result = mysqli_query($conn, $update_query);
                    $update_row = mysqli_fetch_array($update_result);

                    $wallet_current = $update_row['wallet'];
                    $wallet_update = $wallet_current - $price;

                    $buy_query = "UPDATE blogin SET wallet = $wallet_update where username = '$username'";
                    $wallet_result = mysqli_query($conn, $buy_query);
                    $bought = "UPDATE bproducts SET bought = '$username' where item_name = '$name'";
                    $bought_result = mysqli_query($conn, $bought);

                    header('location:buyer_home.php');
                }
                ?>
            </div>
        </div>
        <div class="review">
            <h1>Review</h1>
            <hr class="small_line">
            <?php
            $review_query = "SELECT * from review order by RAND() limit 5";
            $review_result = mysqli_query($conn, $review_query);
            while ($review_row = mysqli_fetch_assoc($review_result)) {
                echo "<h3 id='review_content'>", $review_row['review'], "</h3>";
                echo "<h5 id='review_name'> - ", $review_row['name'], "</h5>";
            }




            ?>
        </div>
    </div>
</body>

</html>