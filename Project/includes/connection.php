<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'project');

if (!$conn) {
    echo "Error connecting to db";
}
