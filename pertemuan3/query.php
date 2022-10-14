<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully to Project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru
VALUES(' ', 'Sian', 'Tangerang', '2000-07-15', 'K2OP099', 'TKRO'),
(' ', 'Acha', 'Klaten', '2009-02-29', 'K2OP100', 'TP'),
(' ', 'Brian', 'Bekasi', '2004-09-09', 'K2OP101', 'PPLG'),
(' ', 'Yuqi', 'Semarang', '2002-12-29', 'K2OP102', 'RPL')");
if(!$query_insert){
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);