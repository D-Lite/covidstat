<?php
$hostname = "localhost";
$username= "root";
$password = "";
$dbname = "covid19";

$connect = mysqli_connect($hostname, $username, $password, $dbname) or die(mysqli_error($connect));
?>