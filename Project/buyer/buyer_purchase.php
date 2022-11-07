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
                <li><a href="buyer_home.php" ><i class="fa fa-home "></i><span>Home</span></a></li>
                <li><a href="buyer_account.php"><i class="fa fa-user-circle "></i><span>Account</span></a></li>
                <li><a href="buyer_purchase.php"><i class="fa fa-cart-arrow-down "></i><span>Purchases</span></a></li>
                <li><a href="buyer_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="buyer_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <center>
            <table>
                <tr>
                    <th style="width: 20%;">Product</th>
                    <th style="width: 60%;">Description</th>
                    <th style="width: 10%;">Price</th>
                    <th style="width: 10%;">Date</th>
                </tr>
                <?php
                $query = "SELECT * from btransactions";
                $result = mysqli_query($conn, $query);
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['product_name']; ?></td>
                        <td><?php echo $rows['product_description']; ?></td>
                        <td><?php echo $rows['price']; ?></td>
                        <td><?php echo $rows['date']; ?></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td>
                        book name
                    </td>
                    <td>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quaerat, pariatur praesentium nulla odit cumque voluptate saepe magni nesciunt explicabo adipisci reiciendis eos cupiditate incidunt? Minus dignissimos perspiciatis nulla nihil?
                    </td>
                    <td>
                        &#8377;700
                    </td>
                    <td>1/07/2022</td>
                </tr>
            </table>
        </center>
    </div>
    <script src="buyer_purchase.js"></script>
</body>

</html>