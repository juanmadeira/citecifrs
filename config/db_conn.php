<?php  
    $sname = "localhost";
    $uname = "root";
    $password = "root";
    $db_name = "citecifrs";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "conexão falhou!";
        exit();
    }
?>