<?php
include('../includes/connection.php');

session_start();
if (isset($_POST['submit'])) {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $number = mysqli_real_escape_string($conn, $_POST['pnumber']);
    $aadhar = mysqli_real_escape_string($conn, $_POST['anumber']);
    $email = mysqli_real_escape_string($conn, $_POST['mail_address']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM slogin WHERE username = '$username' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'You already have an account!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO slogin(username, password, fname, lname, mail, number, aadhar)  VALUES('$username','$pass','$fname','$lname','$email','$number','$aadhar')";
            mysqli_query($conn, $insert);
            header('location:seller_login.php');
        }
    }
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondPage - Registration</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="seller_registration.css">
</head>

<body>

    <div class="container active">
        <div class="forms">
            <div class="form signup">
                <span class="title">Registration</span>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" placeholder="Enter First Name" required name="fname" id="name">
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Last Name" required name="lname" id="name">
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Username" required name="uname" id="name">
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
                        <input type="submit" name="submit" value="Register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already registerd?
                        <a href="seller_login.php" class="text login-link">Login Now</a>
                    </span>
                </div>
                <a href="../main/landing.php" class="back">Go To Home</a>
            </div>



        </div>
    </div>
    <script src="seller_login.js"></script>
</body>

</html>