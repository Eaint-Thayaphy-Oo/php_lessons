<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <h3>Login Form</h3>

    <form action="" method="POST">
        Email<input type="email" name="userEmail" id=""><br>
        Password <input type="password" name="userPassword" id=""><br>
        <input type="submit" value="LogIn" name="loginBtn">
    </form>

    <?php
    $email = 'admin@gmail.com';
    $password = 'admin123';

    $hashPassword = password_hash($password , PASSWORD_BCRYPT);
    echo $password ."<br>";
    echo $hashPassword ."<br>";

    var_dump(password_verify($password,$hashPassword));

    if(isset($_POST['loginBtn'])) {
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];

        // echo $userEmail . $userPassword;

        if($email == $userEmail && $password == $userPassword) {
            echo "Login Success!";
        } else {
            echo "Login Fail! Try Again...";
        }
    }
    ?>
</body>
</html>