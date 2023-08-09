<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
</head>

<body>
    <div class="col-5">
        <div class="bg-success text-white text-center">
            <b>Logout Success!</b>
        </div>
    </div>

    <?php
    session_start();

    session_destroy();
    ?>
</body>

</html>