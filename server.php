<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Server Page</h1>

    <?php
        echo"<pre>";

        // var_dump($_REQUEST);
        // var_dump($_REQUEST['name']);
        var_dump($_POST);
        echo "<br>";

        var_dump($_FILES);

        // echo "i am" . " " . $_POST['firstUserName'];
        // echo "i am {$_POST['firstUserName']}";
    ?>
</body>
</html>