<?php
include '../config/koneksi.php';

$query = mysqli_query($con, "INSERT INTO users VALUES (NULL, '$_POST[username]', md5('$_POST[password]'))");
if ($query){
    header("Location: login.php");
} else {
    echo "Registrasi gagal";
}
?>