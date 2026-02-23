<?php

session_start();
require_once("./connect.php");

$login = $_POST["username"];
$pass = $_POST["password"];


$sql = "SELECT * FROM users WHERE login='$login' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(!mysqli_num_rows($result)){
    $_SESSION["msg"] = "Podano nieprawidłowe dane.";
    header("Location: blog-article.php");
}else{
    header("Location: blog-article.php");
}

$nickname = "SELECT nickname FROM users WHERE login = '" . $login ."' ";
$_SESSION['nickname'] = mysqli_fetch_array($conn->query($nickname))['nickname'];
?>