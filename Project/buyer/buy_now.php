<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy_now</title>
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
                <li><a href="buyer_home.php" ><i class="fa fa-home "></i><span>Home</span></a></li>
                <li><a href="buyer_account.php"><i class="fa fa-user-circle "></i><span>Account</span></a></li>
                <li><a href="buyer_purchase.php"><i class="fa fa-cart-arrow-down "></i><span>Purchases</span></a></li>
                <li><a href="buyer_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="buyer_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="image">
            <img src="./images/book.jpeg" alt="book">
        </div>
        <div class="details">
            <h1>Percy Jackson</h1>
            <h1>&#8377;600</h1>
            <h1>Description</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed deleniti accusantium minus odio dolores saepe similique, iusto veritatis assumenda tenetur quisquam, eaque aut sequi nobis et quos illum distinctio aspernatur?</p>
            <form action="">
                <input type="submit" value="Buy Now" name="buy">
            </form>
        </div>
    </div> 
</body>
</html>