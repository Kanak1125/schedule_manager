<?php
    include_once ("dbconn.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_pass = password_hash($password,PASSWORD_ARGON2ID);
    $query = "INSERT INTO users(Username,Password) Values(:username, :hash_pass)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hash_pass', $hash_pass);
    $stmt->execute();
?>