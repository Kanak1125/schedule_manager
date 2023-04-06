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
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        width: 75vw;
        max-width: 500px;
        /* height: 400px; */
        /* border: 1px solid black; */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 1px 1px 10px black;
        /* background-color: hsla(203, 92%, 85%, 0.6); */
    }

    input[type="number"],
    input[type="text"],
    input[type="time"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        transition: all 300ms linear;
        border: 1px solid grey;
        border-radius: 5px;
    }

    input:focus {
        background-color: hsl(203, 92%, 95%);
        outline: none !important;
    }

    h2 {
        text-align: center;
    }

    .time-container {
        display: flex;
        width: 100%;
        column-gap: 20px;
    }

    .time-container div {
        width: 100%;
    }

    .form-btn-container {
        margin: 20px 0;
        display: flex;
        column-gap: 10px;
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
                <div class="start-time-container">
                    <label for="s_time">Start Time</label><br>
                    <input type="time" name="s_time" id="s_time" required><br>
                </div>
                <div class="end-time-container">
                    <label for="e_time">End Time</label><br>
                    <input type="time" name="e_time" id="e_time" required><br>
                </div>
            </div>
            <div class="form-btn-container">
                <input type="submit" name="add" class="btn btn-add" value="Add" formaction="add.php">
                <input type="submit" name="edit" class="btn btn-edit" value="Edit" formaction="edit.php">
                <input type="submit" name="delete" class="btn btn-del" value="Delete" formaction="delete.php"
                    formnovalidate>
                <!--  formnovalidate attribute added to bypass the form validation only for delete button... -->
            </div>
        </form>

    </div>



</body>

</html>