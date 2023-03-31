<?php
    $host = "127.0.0.1";
    $user = "root";
    $db = "schedule";
    $pass = "";
    $dsn = "mysql:host=$host;dbname=$db;";
    $pdo = new PDO($dsn, $user, $pass);  
?>