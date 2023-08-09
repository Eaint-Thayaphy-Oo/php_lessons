<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("db_connection.php");
    session_start();
    $id = $_GET['id'];
    // echo $_GET['id']; //id pr lh sit tr
    $sql = " SELECT * FROM work WHERE id = ".$id;
    echo $sql;

    $query = mysqli_query($conn, $sql);
    // echo "<pre>";
    // print_r(mysqli_fetch_assoc($query)); //data pr lh sit kyih dr
    $data = mysqli_fetch_assoc($query); //get data

    if (isset($_POST['updateBtn'])) {
        $taskId = $_POST['taskId'];
        $taskName = $_POST['taskName'];

        $updateSQL = "UPDATE work SET name='$taskName' WHERE id=$taskId";

        if (mysqli_query($conn, $updateSQL)) {
            header("location:read.php");
        } else {
           echo "Update error...";
        }
    }


    ?>

    <a href="read.php">List Page</a>

    <form action="" method="POST">
        Tasks
        <input type="hidden" name="taskId" value="<?php echo $data['id']; ?>" required>
        <input type="text" name="taskName" value="<?php echo $data['name']; ?>" required>
        <button name="updateBtn">Update</button>
    </form>
</body>

</html>