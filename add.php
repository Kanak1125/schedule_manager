<?php
    include_once ("dbconn.php");
    $subject_name = $_POST['subject_name'];
    $teacher = $_POST['teacher'];
    $time = $_POST['time'];
    
    $query = "INSERT INTO routine(Subject_name,Teacher,Duration) VALUES(:Subject_name,:Teacher,:Duration)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':Subject_name', $subject_name);
    $stmt->bindParam(':Teacher', $teacher);
    $stmt->bindParam(':Duration', $time);
    $stmt->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2; url='./routine.php'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Entry added successfully</p>
    <p>You will be redirected to routine page</p>
</body>
</html>