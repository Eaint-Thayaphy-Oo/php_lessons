<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Constants
    <hr>

    <?php
        $name = "code lab";
        echo $name. "<br>";

        define("NAME" , "sithu");
        echo NAME. "<br>";

        define("GREETING", "Welcome to W3Schools.com");
        echo GREETING. "<br>";

        function showMessage() {
            echo NAME;
        }

        showMessage();
    ?>
</body>

</html>