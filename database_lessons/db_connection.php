<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // mysqli_connect("host","userName","password","databaseName");
    $connection = mysqli_connect("localhost","root","","pos");

    if($connection) {
        echo "database connect success!";
    } else {
        die("connection fail..." . mysqli_connect_error());
    }
    ?>
</body>
</html>