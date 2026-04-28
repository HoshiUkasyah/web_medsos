<?php

$con = new mysqli("localhost","root","","db_sosmed");

if (!$con){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>