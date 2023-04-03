<?php
    include_once ("dbconn.php");
    $period = $_POST['period'];
    $subject_name = $_POST['subject_name'];
    $teacher = $_POST['teacher'];
    $time = $_POST['time'];

    $query = "UPDATE routine SET Subject_name=:Subject_name, Teacher=:Teacher, Duration=:Duration WHERE Period=:Period";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':Subject_name', $subject_name);
    $stmt->bindParam(':Teacher', $teacher);
    $stmt->bindParam(':Duration', $time);
    $stmt->bindParam(':Period', $period);
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5; url='./routine.php'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <p>Entry updated successfully</p>
    <p>You will be redirected to routine page</p>
</body>
</html>