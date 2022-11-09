<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:admin.php');
}

$msg = "";

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once("config.php");

    if (empty($username) || empty($gender) || empty($email) || empty($_POST['password'])){
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
    }else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg = "<div class='alert alert-danger'>Enter a valid E-mail.</div>";
        }else{
            $result = mysqli_query($conn_db, "INSERT INTO users(username,gender,email,password,created_at) VALUES('$username','$gender','$email','$password','$created')");

            echo "Users ". $username . " added successfully . <a href='login-page.php'>Login</a>";

            if($result){
                header("refresh:5;url=login-page.php");
                echo 'Success Register, You will be redirected to Login page in 5 secs. ';
            }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register Page</title>
</head>
<body>
    <a href="index.php"><button type="button" class="btn btn-warning">Go To Home</button></a><br><br>

    <div class="wrapper">
        <h2 class ="tittle">REGISTER</h2>
        <?php echo $msg; ?>
        <form action="register.php" method="POST" class="form">
            <div class="input-field">
                <label for="username" class="input-label">Username</label>
                <input type="text" name="username" class="input" id="username" placeholder="Enter your username" value="<?php if (isset($_POST['submit'])){ echo $username; } ?>">
            </div>
            <div class="input-field">
                <label for="gender" class="input-label">Gender</label>
                <select name="gender" id="gender" class="input" value="<?php if (isset($_POST['submit'])){ echo $gender; } ?>">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                </select>
            </div>
            <div class="input-field">
                <label for="email" class="input-label">E-mail</label>
                <input type="text" name="email" class="input" id="email" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])){ echo $email; } ?>">
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" class="input" id="password" placeholder="Enter your full name" value="<?php if (isset($_POST['submit'])){ echo $password; } ?>">
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
            <br><br>
            Sudah memiliki akun? <a href="login-page.php">Login</a>
        </form>
    </div>
</body>
</html>