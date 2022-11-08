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
    <title>Donor - Donated</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="donor_sold.css">
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
    <center>
        <form action="" class="search">
            <input type="text" placeholder="Search">
            <input type="submit" class="fa" value="&#xf002;">
        </form>
    </center>
    <center>
        <?php
        $donor_query = "SELECT * FROM dproducts";
        $donor_result = mysqli_query($conn, $donor_query);
        while ($row = mysqli_fetch_assoc($donor_result)) {
        ?>
            <div class="container">
                <div class="card">
                    <?php
                    echo "<img src='./images/BOOKS COVER'", $row['item_name'], "alt='book1'>";
                    echo "<h2> Name - ", $row['item_name'], "</h2>";
                    echo "<h2> Category - ", $row['item_cat'], "</h2>";
                    echo "<h2> Customer - ", $row['customer'], "</h2>";
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </center>

    <script src="donor_sold.js"></script>
</body>

</html>