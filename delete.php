<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1.5; url='./routine.php'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete row</title>
    <style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    label {
        font-size: 18px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    input[type="number"] {
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        background-color: hsl(0, 79%, 65%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: hsl(0, 79%, 55%);
        box-shadow: 0px 1px 5px hsl(0, 79%, 60%);
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
$query = "DELETE FROM routine WHERE Period = :Period";

$stmt = $pdo->prepare($query);

$stmt->bindParam(':Period', $Period, PDO::PARAM_STR);

$stmt->execute();

    include './auto_increment.php';

    // redirect the user to routine.php page...
    header('Location: routine.php');
    exit();

} else {


}


?>