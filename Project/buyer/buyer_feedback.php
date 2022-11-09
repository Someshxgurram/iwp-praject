<?php
include('../includes/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buyer - Feedback</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="buyer_feedback.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
  <div class="nav">
    <div class="title">
      <div class="logo">
        <h2>SecondPages</h2>
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
  <div class="main">
    <form class="container">
      <h1 class="heading">Give feedback</h1>
      <p class="para">Were you able to find the materials you needed?</p>

      <div class="feedback-level">
        <div class="level">
          <i class="lar la-sad-tear"></i>
        </div>
        <div class="level">
          <i class="las la-frown"></i>
        </div>
        <div class="level">
          <i class="lar la-meh"></i>
        </div>
        <div class="level">
          <i class="lar la-smile"></i>
        </div>
        <div class="level">
          <i class="lar la-grin"></i>
        </div>
      </div>

      <div class="feedback-msg">
        <p class="para">
          Do you have any suggestions for new materials?
        </p>
        <textarea name="" id=""></textarea>
      </div>

      <div class="agreement">
        <div class="checkbox">
          <input type="checkbox" name="" id="">
          <label for="">I may be contacted about this feedback <a href="#">Privacy Policy</a>.</label>
        </div>
      </div>

      <div class="buttons">
        <a href="javascript:alert('Thanks for submiting your feedback')">Submit</a>
        <a href="You just cancelled to submit the feedback">Cancel</a>
      </div>
    </form>
  </div>
  <script src="buyer_feedback.js"></script>
</body>

</html>