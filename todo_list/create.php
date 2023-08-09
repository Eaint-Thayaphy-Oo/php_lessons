<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todo List</h1>

    <a href="read.php">List Page</a><br><br>
    <form action="" method="POST">
        <label for="name">Your Tasks</label>
        <input type="text" name="taskName" id="name" placeholder="Enter your tasks...">
        <button name="addBtn">Add</button>
    </form>

    <?php
    require_once('db_connection.php');

    if (isset($_POST['addBtn'])) {

        $taskName = $_POST['taskName'];

        if ($taskName == "" || $taskName == null) {
            echo "<small style='color:red;'>Message is required!</small>";
        } else {
            $sql = "INSERT INTO work(name) VALUES ('$taskName')";

            if (mysqli_query($conn, $sql)) {
                header("location:read.php");
            } else {
                echo "Query Fail..." . mysqli_connect_error();
            }
        }
    }
    ?>
</body>

</html>