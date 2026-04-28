<?php
include 'config/koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $pengunggah = $_POST['pengunggah'];
    
    // Proses Gambar
    $fileName = $_FILES['gambar']['name'];
    $fileTmpName = $_FILES['gambar']['tmp_name'];
    $fileType = $_FILES['gambar']['type'];

    // Membaca isi file menjadi biner
    $imgData = file_get_contents($fileTmpName);
    
    // Menggunakan Prepared Statement agar aman dan mendukung BLOB besar
    $stmt = $con->prepare("INSERT INTO nama_tabel_anda (judul, deskripsi, pengunggah, gambar) VALUES (?, ?, ?, ?)");
    
    // "sssb" berarti: string, string, string, blob
    $stmt->bind_param("sssb", $judul, $deskripsi, $pengunggah, $imgData);
    
    // Kirim data blob secara terpisah agar tidak membebani memori
    $stmt->send_long_data(3, $imgData);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal mengunggah postingan: " . $stmt->error;
    }
    
    $stmt->close();
}
?>