<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor - Add Items</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="donor_add.css">
</head>
<body>
    <div class="nav">
        <div class="menu" id="menu">
            <ul>
                <li><a href="donor_list.html" ><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="donor_sold.html" ><i class="fa fa-handshake-o "></i><span>Donated Items</span></a></li>
                <li><a href="donor_add.html" id="active"><i class="fa fa-plus-square "></i><span>Add Items</span></a></li>
                <li><a href="donor_feedback.html"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="donor_login.html"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()"  style="cursor: pointer;"></a>
        </div>
    </div>
    <div class="container">
        <div class="form">
        <h2>Enter The Book Details</h2>
        <input type="text" name="title" id="title" placeholder="Enter the title" required>
        <input type="text" name="desc" id="desc" placeholder="Enter the description">
        <p>Upload Book Image</p>
        <br>
        <input type="file" placeholder="Choose Image">
        <button>Add Item</button>
        </div>
    </div>
    <script src="donor_add.js"></script>
</body>
</html>