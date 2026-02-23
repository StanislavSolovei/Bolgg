<?php

$conn = mysqli_connect("localhost", "root", "", "blog");
if($conn->errno){
    echo "Nie udało się połączyć z bazą dannych";
    exit;
}else{
    echo "Połączono udało się!";
}

?>