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
        <form action="routin.php">
            <h1>Routine</h1>
            <label for="">period</label><br>
            <input type="text" name="period" id="SN"><br>
            <label for="">subject_name</label><br>
            <input type="text" name="subject_name" id="sname"><br>
            <label for="">teacher</label><br>
            <input type="text" name="teacher" id="teacher"><br>
            <label for="">time</label><br>
            <input type="time" name="time" id="time"><br>
            <input type="submit" name="add" id="add" value="add">
            <input type="submit" name="edit" id="edit" value="edit">   
            <input type="submit" name="delete" id="delete" value="delete">   
        </form>
    </fieldset>
</body>
</html>