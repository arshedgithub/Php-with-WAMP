<?php 
$name1 = "Kamal";
$name2 = "Nimal"; 
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
        <tr>
            <td>Id</td>
            <td>Name</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo($name1); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo($name2); ?></td>
        </tr>
    </table>
</body>
</html>