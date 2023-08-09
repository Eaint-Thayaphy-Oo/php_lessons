<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
                <h1 class="text-center">Registration Form</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();

    function checkStrongPassword($password)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if (preg_match('/[A-Z]/', $password)) {
            $upperStatus = true;
        }

        if (preg_match('/[a-z]/', $password)) {
            $lowerStatus = true;
        }

        if (preg_match('/[0-9]/', $password)) {
            $numberStatus = true;
        }

        if (preg_match('/[!@#$%^&*]/', $password)) {
            $specialStatus = true;
        }

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['register'])) {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if (strlen($password) >= 8 && strlen($confirmPassword) >= 8) {
            if ($password == $confirmPassword) {
                $status = checkStrongPassword($password);

                if ($status) {
                    $_SESSION['email'] = $userEmail;
                    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                    header("location:list.php");
                } else {
                    echo "Your password is not Strong Password! (eg. contain A-Z a-z 0-9 !@#$%^&*)";
                }
            } else {
                echo "Password not the same.Try again!...";
            }
        } else {
            echo "Your password must be greater than 8.";
        }
    }
    ?>
</body>

</html>