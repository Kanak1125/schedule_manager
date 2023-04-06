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
    <?php
        // we use 'GET' method here because we are reading the period data directly from the URL...
        $period_id = $_GET['period'];
    ?>
    <fieldset>
        <form action= "" method = "post">
            
            <h2>Manage Your Schedule</h2>
            <label for="period">Period</label><br>   
            <input type="number" name="period" id="period" value=<?php echo $period_id ?>><br>
            <label for="sname">Subject name</label><br>
            <input type="text" name="subject_name" id="sname" required><br>
            <label for="teacher">Teacher</label><br>
            <input type="text" name="teacher" id="teacher" required><br>
            <div class="time-container" >
                <label for="s_time">Start Time</label><br>
                <input type="time" name="s_time" id="s_time" required><br>
                <label for="e_time">End Time</label><br>
                <input type="time" name="e_time" id="e_time" required><br>
            </div>
            <div class="btn1">
            <input type="submit" name="add" class="btn-add" value="Add" formaction="add.php">
            <input type="submit" name="edit" class="btn-edit" value="Edit" formaction="edit.php">   
            <input type="submit" name="delete" class="btn-del" value="Delete" formaction="delete.php" formnovalidate>
            <!--  formnovalidate attribute added to bypass the form validation only for delete button... -->
            </div>   
        </form>
    </fieldset>
</body>
</html>