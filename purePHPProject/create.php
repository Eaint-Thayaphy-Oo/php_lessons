<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <h1 class="text-center">Create Page</h1>
                <a href="list.php">List Page</a>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="number" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Birthday</label>
                                <input type="date" name="birthday" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="">Please choose an option...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <textarea name="address" rows="4" cols="50" required>Enter your address...</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Weight</label>
                                <input type="text" name="weight" class="form-control" required>
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="addBtn">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("db_connection.php");

    if(isset($_POST['addBtn'])) {
        $studentName = $_POST['name'];
        $studentEmail = $_POST['email'];
        $studentPhone = $_POST['phone'];
        $studentBirthday = $_POST['birthday'];
        $studentGender = $_POST['gender'];
        $studentAddress = $_POST['address'];
        $studentWeight = $_POST['weight'];

        $sql = "INSERT INTO student(name,email,phone,birthday,gender,address,weight) VALUES ('$studentName','$studentEmail','$studentPhone','$studentBirthday','$studentGender','$studentAddress','$studentWeight')";

        if(mysqli_query($conn , $sql)) {
            header("location:list.php");
        } else {
            echo "Query Fail!" . mysqli_connect_error();
        }
    }
    ?>
</body>

</html>