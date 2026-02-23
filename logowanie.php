<?php

session_start();
require_once("./connect.php");

$username = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM users WHERE login='$username' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(!mysqli_num_rows($result)){
    $_SESSION["msg"] = "Podano nieprawidłowe dane.";
    header("Location: index.php");
}else{
    header("Location: blog-article.html");
}

?>