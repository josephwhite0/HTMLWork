<!-- JW - This code is what allows the webpage connect with the database -->
<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "adv_guild";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);