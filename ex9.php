<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Encrypt | Decrypt
    <hr>

    <?php

    $name = "hello world";
    $encName = md5($name);
    $secName = sha1($name);
    $thirdName = crypt($name, "si");

    echo $encName;
    echo "<br>";
    echo $secName;
    echo "<br>";
    echo $thirdName;
    echo "<br>";

    ?>

    <hr>

    Password Hash
    <hr>

    <?php

    $password = 'password123';
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);

    echo $password;
    echo "<br>";
    echo $hashPassword;
    echo "<br>";

    var_dump(password_verify($password, $hashPassword));
    echo "<br>";

    echo password_verify("password123", $hashPassword) ? "same password" : "wrong password";
    ?>

    <hr>

    Date and Time
    <hr>

    <?php
    date_default_timezone_set("Asia/Yangon");
    echo date("d-m-y h:i");
    echo "<br>";

    $currentDate = date_create(date("d-m-Y"));
    date_add($currentDate,date_interval_create_from_date_string("10days"));
    echo date_format($currentDate, "d-m-Y");
    echo "<br>";

    echo cal_days_in_month(CAL_GREGORIAN,date("m"),date("y"));
    ?>

    <hr>

    Include(run) | Require(auto block)

    <hr>
    <?php
     include("./home.php");
    ?>
</body>

</html>