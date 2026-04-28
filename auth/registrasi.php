<head>
    <link rel="stylesheet" href="../assets/css/assets.css">
</head>

<body class="body-form">
    <div class="container">
        <h2 class="title-login">Daftar Akun</h2>
        <form method="POST" action="proses_registrasi.php">
            <input type="text" name="username" placeholder="Username" class="input-text" required><br>
            <input type="password" name="password" placeholder="Password" class="input-text" required><br>
            <button type="submit" class="btn-simpan">Daftar</button>
        </form>
        <h2 class="sub-text">Sudah punya akun? <br><a href="login.php" class="link">Login</a></h2>
    </div>
</body>
