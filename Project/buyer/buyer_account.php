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
    <title>Buyer - Account</title>
    <link rel="stylesheet" href="buyer_account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
        <div class="user_details">
            <h1>Profile Details</h1>
            <div class="display">
                <?php
                $username = $_SESSION['username'];
                $query = "SELECT * from blogin where username = '$username'";
                $result = mysqli_query($conn, $query);
                while ($row = $result->fetch_assoc()) {
                    echo "<p>", $row['fname'], " ", $row['lname'], "</p>";
                }
                ?>
                <a><i class="uil uil-check-circle"></i></a>
            </div>
            <hr>
            <div class="display">
                <?php
                $query = "SELECT * from blogin where username = '$username'";
                $result = mysqli_query($conn, $query);
                while ($row = $result->fetch_assoc()) {
                    echo "<p>", $row['number'], "</p>";
                }
                ?>
                <a><i class="uil uil-check-circle"></i></a>
            </div>
            <hr>
            <div class="display">
                <?php
                $query = "SELECT * from blogin where username = '$username'";
                $result = mysqli_query($conn, $query);
                while ($row = $result->fetch_assoc()) {
                    echo "<p>", $row['email'], "</p>";
                }
                ?>
                <a><i class="uil uil-check-circle"></i></a>
            </div>
            <hr>
            <div class="display">
                <?php
                $query = "SELECT * from blogin where username = '$username'";
                $result = mysqli_query($conn, $query);
                while ($row = $result->fetch_assoc()) {
                    echo "<p>", $row['username'], "</p>";
                }
                ?>
                <a><i class="uil uil-check-circle"></i></a>
            </div>
            <hr>
            <div class="display">
                <?php
                $query = "SELECT * from blogin where username = '$username'";
                $result = mysqli_query($conn, $query);
                while ($row = $result->fetch_assoc()) {
                    echo "<p>", $row['aadhar'], "</p>";
                }
                ?>
                <a><i class="uil uil-check-circle"></i></a>
            </div>
        </div>
        <div class="wallet">
            <h1>Available Balance</h1>
            <?php
            $query = "SELECT * from blogin where username = '$username'";
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
                echo "<p id='wallet_amt'>", $row['wallet'], "</p>";
            }
            ?>
            <h1>Add To Wallet</h1>
            <form action="" method="post" class="top_up">
                <input type="submit" value=100 name="adding">
                <input type="submit" value=200 name="adding">
                <input type="submit" value=300 name="adding">
                <input type="submit" value=400 name="adding">
                <input type="submit" value=500 name="adding">
                <input type="submit" value=600 name="adding">
            </form>
            <?php
            if (isset($_POST['adding'])) {
                $addnumber = $_POST['adding'];
                $my_sql_query = "UPDATE blogin SET wallet=wallet+$addnumber where username = '$username'";
                if (mysqli_query($conn, $my_sql_query)) {
                    header("Refresh:0");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            ?>
        </div>
    </div>
    <script src="buyer_account.js"></script>
</body>

</html>