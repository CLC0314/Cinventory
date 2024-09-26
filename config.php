<?php
$host = 'localhost'; // or your EC2 public IP if needed
$user = 'root'; // replace with your actual database user
$password = ''; // replace with your actual password
$db_name = 'inventory'; // your database name

// Create connection
$con = mysqli_connect($host, $user, $password, $db_name);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
