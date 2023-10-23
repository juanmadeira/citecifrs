<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "citecifrs";
    $port = 3306;

    try{
        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
        //echo "conexão com banco de dados estabelecida com sucesso!";

    } catch(PDOException $err){
        echo "conexão falhou! " . $err->getMessage();
    }