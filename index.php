<?php include 'config/koneksi.php';

session_start();
if (!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
}?>
<head>
    <link rel="stylesheet" href="assets/css/assets.css">
</head>
<body class="body">
<?php include "assets/element/navbar.php"; ?>
<h2>Dashboard</h2>
</body>