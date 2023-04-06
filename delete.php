<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1.5; url='./routine.php'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete row</title>
</head>

<body>
    <form action="#" method="post">
        <label for="search">Search By Id:</label>
        <input type="number" name="search" id="search" value="0">
        <a href="routine.php">
            <input type="submit" value="Delete">
        </a>
    </form>
</body>

</html>
<?php
include_once './dbconn.php';


if (isset($_POST['search'])) {
    $Period = $_POST['search'];
    $query = "DELETE FROM routine WHERE Period = $Period";

    $stmt = $pdo->prepare($query);

    $stmt->execute();
    include './auto_increment.php';

    // redirect the user to routine.php page...
    header('Location: routine.php');
    exit();

} else {


}


?>