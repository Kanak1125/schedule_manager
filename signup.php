<?php
    include_once ("dbconn.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(Username,Password) Values(:username, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
?>