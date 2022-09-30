<?php
session_start();

$_SESSION['nama'] = "Marcella Phua Samara Geneva";

$_SESSION['absen'] = 13;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 1</title>
</head>
<body>
    <?php
    echo "Nama saya " . $_SESSION['nama'] . "<br>" . "Nomer Absen ". $_SESSION['absen'];
    ?>
</body>
</html>