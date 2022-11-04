<?php
include('./includes/connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondPage - Login</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="buyer_login.css">
</head>

<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter Email" required name="mail_address" id="mail_address">
                        <i class="uil uil-envelope-check icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter Password" required name="password" id="password">
                        <i class="uil uil-key-skeleton icon"></i>
                        <i class="uil uil-eye showPw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember Me</label>
                        </div>

                        <a href="forgot_pass.php" class="text">Forgot Password</a>

                    </div>

                    <div class="input-field button">
                        <a href="./buyer_home.php"><input type="button" value="Login"></a>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Haven't Registered?
                        <a href="#" class="text signup-link">Register Now</a>
                    </span>
                </div>
                <a href="../main/landing.php" class="back">Go To Home</a>
            </div>
            <!--Registration Form-->
            <div class="form signup">
                <span class="title">Registration</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter Name" required name="name" id="name">
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Phone Number" required name="pnumber" id="pnumber">
                        <i class="uil uil-phone-volume icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Aadhar Card Number" required name="anumber" id="anumber">
                        <i class="uil uil-postcard icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Email" required name="mail_address" id="mail_address">
                        <i class="uil uil-envelope-check icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter Password" required name="password" id="password">
                        <i class="uil uil-lock-alt icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm Password" required name="cpassword" id="cpassword">
                        <i class="uil uil-lock-alt icon"></i>
                        <i class="uil uil-eye showPw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already registerd?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>



        </div>
    </div>
    <script src="buyer_login.js"></script>
</body>

</html>