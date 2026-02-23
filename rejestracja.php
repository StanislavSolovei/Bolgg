<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "blog");

if($conn->errno){
    echo "Nie udało się połączyć";
    $conn -> close();
    exit;
}

echo $_POST["new-username"];
echo "<br>";
echo $_POST["new-password"];
echo "<br>";
echo $_POST["new-re-password"];
echo "<br>";
echo "<br><hr><br>";

$password = $_POST["new-password"];
$re_password = $_POST["new-re-password"];
$login = $_POST["new-username"];

if($password != $re_password) {
    $_SESSION["error_msg"] = "Hasła muszą być takie same!";
    header("Location: index.php");
    exit;
} 

$sql = "SELECT * FROM users WHERE login='" . $_POST["new-username"] . "'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $_SESSION["error_msg"] = "Taki użytkownik o tym loginie istnieje!";
}else {

$sql = "INSERT INTO `users` (`id`, `login`, `password`, `nickname`) VALUES (NULL, '$login', '$password', 'user" . time() . "')";

$result = mysqli_query($conn, $sql);
}

$conn -> close();

header("Location: index.php");

?>