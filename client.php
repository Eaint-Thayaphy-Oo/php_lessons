<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client Page</h1>

    <!-- GET | POST
    GET => <a href=""></a>
    POST => <form action="" method="post"></form>
    GET => http://localhost/php_lessons/server.php?firstUserName=codee&secondUserName=lab
    POST => http://localhost/php_lessons/server.php -->

    <a href="./server.php?name=sithu&job=programmer&address=pyay">Server</a>

    <form action="server.php" method="post" enctype="multipart/form-data">
        First Name<input type="text" name="firstUserName"><br>
        Second Name<input type="text" name="secondUserName"><br>

        <select name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <br>

        <input type="file" name="myImage"><br>

        <button type="submit">Click to Send</button>
    </form>
</body>
</html>