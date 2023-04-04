<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "routine";

// creating connection
$connection = new mysqli($servername, $username, $password, $database);

//checking connection

if ($connection->connect_error != 0) {
    die("connection failed :" . $connection->connect_error);

}

/*
//insert into table
$sql = "INSERT INTO tbl_products(id,name,price)
VALUES (106,'Pjhbjhkb',27)";
// execute sql
if ($connection->query($sql)) {
echo "Record inserted succesfully";
} else {
echo "Error creating database:" . $connection->error;
}
*/
// delete row
$routine = 'routine';
$query = "SELECT * FROM $routine ORDER BY Period ASC";
$result = $connection->query($query);

// delete rows one by one
while ($row = $result->fetch_assoc()) {
    $Period = $row['Period'];
    $delete_query = "DELETE FROM $routine WHERE Period = $Period";
    if ($connection->query($delete_query) === TRUE) {
        echo "Row with ID $Period deleted successfully from table $routine.";
    } else {
        echo "Error deleting row: " . $connection->error;
    }
}

// free the result set and close the connection
$result->free();
$connection->close();

?>