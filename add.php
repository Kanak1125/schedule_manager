<?php
include_once("dbconn.php");
$subject_name = $_POST['subject_name'];
$teacher = $_POST['teacher'];
$s_time = $_POST['s_time'];
$e_time = $_POST['e_time'];

$query = "INSERT INTO routine(Subject_name,Teacher,Start_time, End_time)
     VALUES(:Subject_name,:Teacher,:Start_time, :End_time)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':Subject_name', $subject_name);
$stmt->bindParam(':Teacher', $teacher);
$stmt->bindParam(':Start_time', $s_time);
$stmt->bindParam(':End_time', $e_time);

$stmt->execute();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5; url='./routine.php'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>

<body>
    <p>Entry added successfully</p>
    <p>You will be redirected to routine page</p>
</body>

</html>