<?php
include_once "./dbconn.php";
$query = "SELECT * FROM routine";
$stmt = $pdo->prepare($query);
$stmt->execute();
$periods = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- font awesome cdn for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        th {
            background-color: #131313;
            color: #d0d0d0;
            padding: 7.5px 20px;
        }

        tr {
            transition: all 300ms ease-out;
        }

        table tr:hover {
            background-color: hsl(203, 92%, 93%);
        }
    </style>
</head>

<body>
    <center>
        <h2>Routine</h2>
        <table>
            <tr class="table-heading">
                <th>Period</th>
                <th>Subject Name</th>
                <th>Teacher</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            <?php foreach ($periods as $p) {
                // NOTE: 'H' gives the time in 24-hour format whereas 'h' gives the time in 12-hour format && 'A' gives AM and PM...
                $formatted_start_time = date('h:i A', strtotime($p['Start_time']));
                $formatted_end_time = date('h:i A', strtotime($p['End_time']));
                ?>
                <tr>
                    <td align="center">
                        <?php echo $p['Period'] ?>
                    </td>
                    <td>
                        <?php echo $p['Subject_name'] ?>
                    </td>
                    <td>
                        <?php echo $p['Teacher'] ?>
                    </td>
                    <td>
                        <?php echo $formatted_start_time ?> -
                        <?php echo $formatted_end_time ?>
                    </td>
                    <td>
                        <a href="./form.php?period=<?php echo $p['Period'] ?>"><button class="btn btn-edit btn-for-row"
                                title="Edit this row"><i class="fas fa-edit"></i></button></a>

                        <!-- passing current period of the row from the table to the 'delete_row.php' file -->
                        <a href="./delete_row.php?period=<?php echo $p['Period'] ?>">
                            <button class="btn btn-del btn-for-row"><i class="fas fa-trash"
                                    title="Delete this row"></i></button>
                        </a>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </center>
    <div class="btn-container">
        <a href="./form.php?period=<?php 0 ?>"><button class="btn btn-add">Update</button></a>
        <!-- <a href="./edit.php"><button class="btn btn-edit">Edit</button></a> -->
        <a href="./delete.php"><button class="btn btn-del">Delete</button></a>
    </div>
</body>

</html>