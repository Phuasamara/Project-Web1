<?php
session_start();
if(isset($_SESSION['username'])) {
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" />
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" />
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
    <br><br>
    Belum memiliki akun? <a href="register.php">Buat Akun</a> -->

    <div class="wrapper">
        <h2 class ="tittle">LOGIN</h2>
        <form action="index.php" method="POST" class="form">
            <div class="input-field">
                <label for="username" class="input-label">Username</label>
                <input type="text" name="username" class="input" id="username" placeholder="Enter your username" >
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" class="input" id="password" placeholder="Enter your password" >
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
            <br><br>
            Belum memiliki akun? <a href="register.php">Buat Akun</a>
        </form>
    </div>
</body>
</html>