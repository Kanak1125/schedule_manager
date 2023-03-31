<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_scripting_language";
//  creating database

$connection = new mysqli($servername, $username, $password, $database);

// checking connection

if ($connection->connect_errno != 0) {
    die("Connection failed :" . $connection->connect_error);

}
echo "Database connected successfully";
echo "<pre>";
print_r($connection);
?>