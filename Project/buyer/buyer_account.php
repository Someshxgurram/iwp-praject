<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer - Account</title>
    <link rel="stylesheet" href="buyer_account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="nav">
        <div class="menu" id="menu">
            <ul>
                <li><a href="buyer_home.php"><i class="fa fa-home "></i><span>Home</span></a></li>
                <li><a href="buyer_account.php" id="active"><i class="fa fa-user-circle "></i><span>Account</span></a></li>
                <li><a href="buyer_purchase.php"><i class="fa fa-cart-arrow-down "></i><span>Purchases</span></a></li>
                <li><a href="buyer_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="buyer_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
        </div>
    </div>
    <div class="container">
        <div class="user_details">
            <h1>Profile Details</h1>
            <div class="display">
                <p>Siddharth30</p>
                <a><i class="fa fa-edit"></i></a>
            </div>
            <hr>
            <div class="display">
                <p>8179221768</p>
                <a><i class="fa fa-edit"></i></a>
            </div>
            <hr>
            <div class="display">
                <p>siddharth30@gmail.com</p>
                <a><i class="fa fa-edit"></i></a>
            </div>
            <hr>
            <div class="display">
                <p>30/10/2002</p>
                <a><i class="fa fa-edit"></i></a>
            </div>
            <hr>
            <div class="display">
                <p>3/4 , Chennai , Tamil Nadu - 60004</p>
                <a><i class="fa fa-edit"></i></a>
            </div>
        </div>
        <div class="wallet">
            <h1>Available Balance</h1>
            <p>1500</p>
            <h1>Add To Wallet</h1>
            <div class="top_up">
                <button>100</button>
                <button>200</button>
                <button>300</button>
                <button>400</button>
                <button>500</button>
                <button>600</button>
            </div>
        </div>
    </div>
    <script src="buyer_account.js"></script>
</body>

</html>