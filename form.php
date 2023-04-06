<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\css\style.css">
</head>

<body>
    <fieldset>
        <form action= "" method = "post">
            
            <h2>Routine</h2>
            <label for="period">Period</label><br>   
            <input type="number" name="period" id="period"><br>
            <label for="sname">Subject name</label><br>
            <input type="text" name="subject_name" id="sname"><br>
            <label for="teacher">Teacher</label><br>
            <input type="text" name="teacher" id="teacher"><br>
            <div class="time-container" >
                <label for="s_time">Start Time</label><br>
                <input type="time" name="s_time" id="s_time"><br>
                <label for="e_time">End Time</label><br>
                <input type="time" name="e_time" id="e_time"><br>
            </div>
            <div class="btn1">
            <input type="submit" name="add" class="btn-add" value="Add" formaction="add.php">
            <input type="submit" name="edit" class="btn-edit" value="Edit" formaction="edit.php">   
            <input type="submit" name="delete" class="btn-del" value="Delete" formaction="delete.php">
            </div>   
        </form>
    </fieldset>
</body>
</html>