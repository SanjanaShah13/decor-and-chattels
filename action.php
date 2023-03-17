<?php
require("connection.php");
if (isset($_POST["email_input"]) && isset($_POST["pass_input"])) {
    $email = $_POST["email_input"];
    $password = $_POST["pass_input"];
    $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";
    $result = mysqli_query($conn, $sql);
    header("location:home.php");
}
?>