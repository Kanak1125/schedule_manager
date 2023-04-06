<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        label width: 400px;
        height: 400px;
        border: 1px solid black;
        padding: 20px;
        border-radius: 10px;
        background-color: orange;
    }

    .btn {
        padding: 17px 10px;
        border: none;
        color: white;
        border-radius: 2.5px;
        cursor: pointer;
        transition: all 300ms ease-out;
        color: white;
    }

    .btn-edit {
        background-color: hsl(82, 100%, 45%);
    }

    .btn-add {
        background-color: hsl(120, 73%, 65%);
        cursor: pointer;
    }

    .btn-del {
        background-color: hsl(0, 79%, 65%);
        cursor: pointer;
    }

    .btn-edit:hover {
        background-color: hsl(203, 92%, 55%);
        box-shadow: 0px 1px 5px hsl(203, 92%, 50%);
    }

    .btn-add:hover {
        background-color: hsl(120, 73%, 55%);
        box-shadow: 0px 1px 5px hsl(120, 73%, 50%);
    }

    .btn-del:hover {
        background-color: hsl(0, 79%, 55%);
        box-shadow: 0px 1px 5px hsl(0, 79%, 60%);
    }

    h2 {
        text-align: center;
    }
</style>

<body>
    <?php
    $period_id;
    // we use 'GET' method here because we are reading the period data directly from the URL...
    if (!isset($_GET['period'])) { // if the value of 'period' is NOT SET assign empty string to $period_id else assign it a received value(id)...
        $period_id = "";
    } else {
        $period_id = $_GET['period'];
    }
    ?>
    <div class="form-container">
        <form action="" method="post" class="form">

            <h2>Manage Your Schedule</h2>
            <label for="period">Period</label><br>
            <input type="number" name="period" id="period" value=<?php echo $period_id ?>><br>
            <label for="sname">Subject name</label><br>
            <input type="text" name="subject_name" id="sname" required><br>
            <label for="teacher">Teacher</label><br>
            <input type="text" name="teacher" id="teacher" required><br>
            <div class="time-container">
                <label for="s_time">Start Time</label><br>
                <input type="time" name="s_time" id="s_time" required><br>
                <label for="e_time">End Time</label><br>
                <input type="time" name="e_time" id="e_time" required><br>
            </div>
            <div class="btn">
                <input type="submit" name="add" class="btn-add" value="Add" formaction="add.php">
                <input type="submit" name="edit" class="btn-edit" value="Edit" formaction="edit.php">
                <input type="submit" name="delete" class="btn-del" value="Delete" formaction="delete.php"
                    formnovalidate>
                <!--  formnovalidate attribute added to bypass the form validation only for delete button... -->
            </div>
        </form>

    </div>



</body>

</html>