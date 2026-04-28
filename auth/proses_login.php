<?php
session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data= mysqli_fetch_assoc($query);

if ($data){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    header("Location: ../index.php");
} else {
    echo "Login gagal";
}?>