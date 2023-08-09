<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Page</title>
</head>

<body>
    <h1>List Page</h1>
    
    <a href="create.php">Create Page</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>BIRTHDAY</th>
            <th>GENDER</th>
            <th>ADDRESS</th>
            <th>WEIGHT</th>
            <th></th>
        </tr>

        <?php
        require_once("db_connection.php");

        $sql = "SELECT * FROM student";

        $query = mysqli_query($conn, $sql);

        $totalRow = mysqli_num_rows($query);

        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['birthday']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['address']}</td>
            <td>{$row['weight']}</td>
            <td>
            <a href='#'>Edit</a> |  <a href='#'>Delete</a>
            </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>