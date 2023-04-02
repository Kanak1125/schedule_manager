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
        </tr>
        <?php foreach ($periods as $p) { 
        ?>
            <tr>
                <td><?php echo $p['Period']?></td>
                <td><?php echo $p['Subject_name']?></td>
                <td><?php echo $p['Teacher']?></td>
                <td><?php echo $p['Duration']?></td>
                <?php } ?>
            </tr>
    </table>
    <div class="btn-container">
        <a href="./add.php"><button>Add</button></a>
        <a href="./edit.php"><button>Edit</button></a>
        <a href="./delete.php"><button>Delete</button></a>
    </div>
</body>
</html>