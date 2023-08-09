<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            <div class="col-5 text-center mb-3">
                <div class="text-center mb-3">
                    <a href="./login.php">
                        <button class="btn bg-primary text-white" style="width: 200px;">Login</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./register.php">
                        <button class="btn bg-success text-white" style="width: 200px;">Register</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./logout.php">
                        <button class="btn bg-danger text-white" style="width: 200px;">Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5 text-center mb-3">
                <h1>Welcome back!</h1>
                <h3>Please enter your login details</h3>
                <div class="card">
                    <div class="card_body"></div>
                </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email...">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Enter your password...">
                    </div>
                    <button type="submit" class="btn bg-dark text-white float-end" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    session_start();
    
    if(isset($_POST['login'])) {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];

        if($userEmail == $_SESSION['email'] && $userPassword == $_SESSION['password']) {
            echo "Login Success!";
        } else {
            echo "Login Fail! Try Again...";
        }
    }
    ?>
</body>

</html>