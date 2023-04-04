<?php 
    include_once "./dbconn.php";
    $query = "SELECT * FROM routine";
    $stmt = $pdo -> prepare($query); 
    $stmt -> execute();
    $periods = $stmt -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Routine</h2>
    <table>
        <tr>
            <th>Period</th>
            <th>Subject Name</th>
            <th>Teacher</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
        <?php foreach ($periods as $p) { 
        ?>
            <tr>
                <td><?php echo $p['Period']?></td>
                <td><?php echo $p['Subject_name']?></td>
                <td><?php echo $p['Teacher']?></td>
                <td><?php echo $p['Duration']?></td>
                <td>
                    <a href="./php"><button>Edit</button></a>

                    <!-- passing current period of the row from the table to the 'delete_row.php' file -->
                    <a href="./delete_row.php?period=<?php echo $p['Period'] ?>"><button>Delete</button></a>
                </td>
                <?php } ?>
            </tr>
    </table>
    <div class="btn-container">
        <a href="./form.php"><button>Add</button></a>
        <a href="./edit.php"><button>Edit</button></a>
        <a href="./delete.php"><button>Delete</button></a>
    </div>
</body>
</html>