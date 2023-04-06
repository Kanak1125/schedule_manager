<?php
    include_once ("dbconn.php");
    $period = $_POST['period'];
    $subject_name = $_POST['subject_name'];
    $teacher = $_POST['teacher'];
    $s_time = $_POST['s_time'];
    $e_time = $_POST['e_time'];

    $query = "UPDATE routine SET Subject_name=:Subject_name, Teacher=:Teacher, Start_time=:Start_time, End_time=:End_time WHERE Period=:Period";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':Subject_name', $subject_name);
    $stmt->bindParam(':Teacher', $teacher);
    $stmt->bindParam(':Start_time', $s_time);
    $stmt->bindParam(':End_time', $e_time);
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