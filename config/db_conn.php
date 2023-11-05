<?php
    // define as informações do banco de dados
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "citecifrs";

    // conecta ao banco de dados
    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "conexão falhou!";
        exit();
    }
?>