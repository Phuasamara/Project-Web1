<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully to Project1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if(!$query){
    echo ("Error query " . mysqli_error($connection));
}
echo "<br> Hasil Numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM))  {
    print "ID : " .$data[0] . "<br>";
    print "NAMA LENGKAP : " . $data[1] . "<br>";
    print "JURUSAN : " . $data[2] . "<br>";
}

mysqli_close($connection);