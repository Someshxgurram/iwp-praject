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
        <div class="menu" id="menu">
            <ul>
                <li><a href="buyer_home.html"><i class="fa fa-home "></i><span>Home</span></a></li>
                <li><a href="buyer_account.html" ><i class="fa fa-user-circle "></i><span>View Account</span></a></li>
                <li><a href="buyer_purchase.html" id="active"><i class="fa fa-cart-arrow-down "></i><span>Previous Purchases</span></a></li>
                <li><a href="buyer_feedback.html"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="buyer_login.html"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
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
            <tr>
                <td>
                    <p>hui</p>
                </td>
                <td>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quaerat, pariatur praesentium nulla odit cumque voluptate saepe magni nesciunt explicabo adipisci reiciendis eos cupiditate incidunt? Minus dignissimos perspiciatis nulla nihil?
                </td>
                <td>
                    &#8377;600   
                </td>
                <td>21/03/2022</td>
            </tr>
            <tr>
                <td>
                    <img src="./images/book2.jpeg" alt="book1">
                </td>
                <td>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quaerat, pariatur praesentium nulla odit cumque voluptate saepe magni nesciunt explicabo adipisci reiciendis eos cupiditate incidunt? Minus dignissimos perspiciatis nulla nihil?
                </td>
                <td>
                    &#8377;800   
                </td>
                <td>2/05/2022</td>
            </tr>
            <tr>
                <td>
                    <img src="./images/book3.jpeg" alt="book1">
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