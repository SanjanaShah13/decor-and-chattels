<?php
$hostname = "localhost";
$database = "furni";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection Failed");
}
?>