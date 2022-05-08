<?php

require_once 'db.php';

$sql = "SELECT id,name,age, (SELECT name FROM gender WHERE id = gender_id) as gender FROM employee";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($employee = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                        echo("<td>");
                            echo($employee['id']);
                        echo("</td>");
                        echo("<td>");
                            echo($employee['name']);
                        echo("</td>");
                        echo("<td>");
                            echo($employee['age']);
                        echo("</td>");
                        echo("<td>");
                            echo($employee['gender']);
                        echo("</td>");
                    echo("</tr>");
                }
            ?>
        </tbody>
    </table>
</body>
</html>


