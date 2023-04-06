<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\css\style.css">
</head>
<style>
    body{
        background-color: black;
        font-family: 'Poppins', sans-serif;
    }
    .form{
        width: 400px;
        height: 400px;
        box-sizing: border-box;
        font-size: 1rem;
        padding: 2rem;
        background-color: aqua;
        display: grid;
        border: 2px solid green;
        justify-content: center;
        align-items: center;
    }
    .btn{
      width: 200px;
      padding: 12px;
      justify-content: center;
      align-items: center;
    }
</style>

<body>
    <?php
        $period_id;
        // we use 'GET' method here because we are reading the period data directly from the URL...
        if(!isset($_GET['period'])) {   // if the value of 'period' is NOT SET assign empty string to $period_id else assign it a received value(id)...
            $period_id = "";
        } else {
            $period_id = $_GET['period'];
        }
    ?>
    
        <form action= "" method = "post" class="form">
            
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
            <div class="btn">
            <input type="submit" name="add" class="btn-add" value="Add" formaction="add.php">
            <input type="submit" name="edit" class="btn-edit" value="Edit" formaction="edit.php">   
            <input type="submit" name="delete" class="btn-del" value="Delete" formaction="delete.php" formnovalidate>
            <!--  formnovalidate attribute added to bypass the form validation only for delete button... -->
            </div>   
        </form>
    
</body>
</html>