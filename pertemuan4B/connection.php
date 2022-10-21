<?php
$connection = mysqli_connect("localhost", "root", "", "sekolah");
if(!$connection){
    echo mysqli_connect_error();
}