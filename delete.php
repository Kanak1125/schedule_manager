<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1.5; url='./routine.php'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete row</title>
    <link rel="stylesheet" href=".\css\style.css">
    <style>
        body{
            background-color: black;
        }
        form{
            height: 123px;
            width: 400px;
            font-size: 2rem;
            text-align: center;
            border: 1px solid black;
            background-color: aqua;
            justify-content: center;
            box-sizing: border-box;
            align-items: center;

            
        }
        
    </style>
</head>


<body>
    <form action="#" method="post">
        <label for="search">Search By Id:</label><br>
        <input type="number" name="search" id="search" value="0">
        <a href="routine.php">
            <input type="submit" value="Delete" class="btn-del">
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