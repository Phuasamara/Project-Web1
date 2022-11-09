<?php
session_start();
$username = $_POST['username'];

include_once('config.php');

$query = mysqli_query($conn_db, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $user['username'] && password_verify($_POST['password'],
    $user['password'])) {
        $_SESSION['username'] = $username;
        header("location:admin.php");
    }else {
        echo '<script> alert("Username atau password salah!");
        window.location="login-page.php"; </script>';
    }
}else {
    echo '<script> window.location="login-page.php"; </script>';
}
?>