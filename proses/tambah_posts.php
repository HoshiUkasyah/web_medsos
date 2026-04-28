<?php 
session_start();
if (!isset($_SESSION['login'])){
    header("Location: auth/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/assets.css">
    <title>Tambah Postingan Baru</title>
</head>
<body class="body-form">
    <div class="container">
        <h2 class="title-login">Buat Postingan</h2>
        
        <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
            <input type="text" name="judul" placeholder="Judul Postingan" class="input-text" required><br>
            
            <textarea name="deskripsi" placeholder="Tulis deskripsi atau caption..." class="input-text" style="height: 100px;" required></textarea><br>
            
            <input type="text" name="pengunggah" placeholder="Nama Pengunggah" class="input-text" required><br>
            
            <label class="sub-text" style="display: block; text-align: left; margin-bottom: 5px;">Pilih Gambar:</label>
            <input type="file" name="gambar" class="input-text" accept="image/*" required><br>
            
            <button type="submit" name="submit" class="btn-simpan">Posting</button>
            <a href="index.php" class="btn-kembali" style="display: inline-block; padding: 10px; width: 70px;">Batal</a>
        </form>
    </div>
</body>
</html>