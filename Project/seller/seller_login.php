<?php
include('../includes/connection.php');

session_start();

if (isset($_POST['submit'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM slogin WHERE username = '$uname' && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['username'];
        header('location:seller_list.php');
    } else {
        $error[] = 'incorrect email or password!';
    }
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondPage - Login</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="seller_login.css">
</head>

<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" placeholder="Enter Username" required name="uname" id="uname">
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
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        };
                    };
                    ?>
                    <div class="input-field button">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Haven't Registered?
                        <a href="seller_registration.php" class="text signup-link">Register Now</a>
                    </span>
                </div>
                <a href="../main/landing.php" class="back">Go To Home</a>
            </div>
        </div>
    </div>
    <script src="seller_login.js"></script>
</body>

</html>