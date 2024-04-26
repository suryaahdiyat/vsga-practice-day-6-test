<?php

include "../util/connection.php";

session_start();

if (isset($_POST['btn-submit'])) {
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $passw = $_POST['passw'];

    $q = mysqli_query($conn, "INSERT INTO users VALUES('', '$gambar', '$nama', '$email', '$passw', '$no_hp', 'B');");
    if (mysqli_affected_rows($conn)) {
        echo "
            <script>
                window.location.href='register.php?a=y'
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleto Bay | Register</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="w-25 bg-secondary p-4 text-center rounded-4">
        <h1 class="text-light mb-4">Paleto Bay</h1>
        <?php if (isset($_GET['a'])) : ?>
            <p class="position-relative bg-info py-3 border border-info text-light" style="--bs-bg-opacity: .4;">Berhasil Register <a href="login.php" class="position-absolute d-block text-decoration-none text-danger fs-6 bg-light rounded-circle border border-danger top-0 start-100 translate-middle" style="width: 28px;height: 28px;--bs-bg-opacity: .7;">x</a></p>
        <?php endif; ?>
        <form action="" method="POST">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" required type="file" name="gambar" placeholder="gambar...">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" required type="text" name="nama" placeholder="nama...">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" required type="email" name="email" placeholder="email...">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" required type="number" name="no_hp" placeholder="no hp...">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" required type="password" name="passw" placeholder="password...">
            <p class="text-light">Sudah punya akun? <a href="login.php" class="text-primary-emphasis">Log in</a></p>
            <button name="btn-submit" class="btn btn-light w-100">Daftar</button>
        </form>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>