<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tasks List</h1>

    <a href="create.php">Create Page</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th></th>
        </tr>

        <?php
        require_once("db_connection.php");

        // SELECT * FROM table_name
        $sql = "SELECT * FROM work";

        $query = mysqli_query($conn, $sql);

        // echo "<pre>";
        // var_dump($query);

        $totalRow = mysqli_num_rows($query);

        // var_dump($totalRow);

        while ($totalRow = mysqli_fetch_assoc($query)) {
            $time =  date('d-m-Y h:i a', strtotime($totalRow['created_at']));

            echo "
        <tr>
            <td>{$totalRow['id']}</td>
            <td>{$totalRow['name']}</td>
            <td>$time</td>
            <td>
                <a href='update.php?id={$totalRow['id']}'>Update</a> |
                <a href='delete.php?id={$totalRow['id']}'>Delete</a>
            </td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>