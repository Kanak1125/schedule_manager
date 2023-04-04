<?php
    include_once './dbconn.php';

    /* @num is a variable initially 0
    */
    $query2 = "SET @num :=0;        
                UPDATE routine SET Period = @num := (@num + 1);
                ALTER TABLE routine AUTO_INCREMENT = 1;";

    $stmt2 = $pdo -> prepare($query2);
    $stmt2 -> execute();
?>