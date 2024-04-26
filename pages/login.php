<?php

include "../util/connection.php";

session_start();

$_SESSION['nama-user'] = null;

if (isset($_POST['btn-submit'])) {
    $email = $_POST['email'];
    $passw = $_POST['passw'];

    $q = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND passw = '$passw'");
    $row = mysqli_fetch_assoc($q);
    if ($row) {
        $_SESSION['user']['nama'] = $row['nama'];
        $_SESSION['user']['role'] = $row['role'];
        $nama = $row['nama'];
        if ($row['role'] == "A") {
            echo "
            <script>
            alert('Selamat Datang $nama')
            window.location.href='home.php'
            </script>
            ";
        } else {
            echo "
                <script>
                    alert('Selamat Datang $nama')
                    window.location.href='user/home.php'
                </script>
            ";
        }
    } else {
        echo "
            <script>
                window.location.href='login.php?err=y'
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
    <title>Paleto Bay | Login</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="w-25 bg-secondary p-4 text-center rounded-4">
        <h1 class="text-light mb-4">Paleto Bay</h1>
        <?php if (isset($_GET['err'])) : ?>
            <p class="position-relative bg-info py-3 border border-info text-light" style="--bs-bg-opacity: .4;">username dan password tidak cocok <a href="login.php" class="position-absolute d-block text-decoration-none text-danger fs-6 bg-light rounded-circle border border-danger top-0 start-100 translate-middle" style="width: 28px;height: 28px;--bs-bg-opacity: .7;">x</a></p>
        <?php endif; ?>
        <form action="" method="POST">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" type="email" name="email" placeholder="email...">
            <input class="form-control mb-2 focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-light-rgb), .25)" type="password" name="passw" placeholder="password...">
            <p class="text-light">Belum punya akun? <a href="register.php" class="text-primary-emphasis">daftar</a></p>
            <button name="btn-submit" class="btn btn-light w-100">Login</button>
        </form>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>