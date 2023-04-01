<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action= "" method = "post">
            <h1>Routine</h1>
            <label for="">Period</label><br>
            <input type="text" name="period" id="SN"><br>
            <label for="">Subject_ame</label><br>
            <input type="text" name="subject_name" id="sname"><br>
            <label for="">Teacher</label><br>
            <input type="text" name="teacher" id="teacher"><br>
            <label for="">Time</label><br>
            <input type="time" name="time" id="time"><br>
            <input type="submit" name="add" id="add" value="Add" formaction="add.php">
            <input type="submit" name="edit" id="edit" value="Edit">   
            <input type="submit" name="delete" id="delete" value="Delete" formaction="delete.php">   
        </form>
    </fieldset>
</body>
</html>