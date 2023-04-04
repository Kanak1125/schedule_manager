<?php
    include_once './dbconn.php';
    
    $period_num = $_GET['period'];  // receiving and storing the period number so that we can delete that particular row only...
    
    $query = "DELETE FROM routine WHERE Period=$period_num";

    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1.5; url='./routine.php'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete row</title>
</head>
<body>
    <p>Row <?php echo $_GET['period']?> deletion successful</p>
    <p>You will be redirected to routine page</p>
</body>
</html>