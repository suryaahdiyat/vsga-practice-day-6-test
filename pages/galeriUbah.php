<?php
include "../util/connection.php";

session_start();
if (!isset($_SESSION['user'])) {
    echo "
        <script>
            window.location.href='login.php'
        </script>
    ";
}

if ($_SESSION['user']['role'] != "A") {
    echo "
            <script>
                window.location.href='user/home.php'
            </script>
        ";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = mysqli_query($conn, "SELECT * FROM galeri WHERE id = $id");
    $oldGaleri = mysqli_fetch_assoc($q);

    if (isset($_POST['btn-submit'])) {
        $jGambar = $_POST['jGambar'];
        $gambar = $_POST['gambar'] ? $_POST['gambar'] : $oldGaleri['gambar'];

        $q = mysqli_query($conn, "UPDATE galeri SET gambar = '$gambar', judul = '$jGambar' WHERE id = '$id'");
        if (mysqli_affected_rows($conn)) {
            echo "
                <script>
                    window.location.href='galeriUbah.php?id=$id&u=y'
                </script>
            ";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleto Bay | Galeri</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="vh-100">
    <div class="d-flex w-100">
        <div class="p-2 border border-dark d-flex justify-content-center align-items-center" style="width: 17%;">
            <img src="../assets/Paleto-bay-logo.jpg" alt="rocklee.png" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 border border-dark" style="width: 83%;">
            <h1 class="text-dark text-center" style="font-size: 130px;">Paleto Bay</h1>
        </div>
    </div>
    <nav class="w-100 d-flex">
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Hai, <?= $_SESSION['user']['nama'] ?></a>
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Home</a>
        <a href="visiMisi.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Visi dan Misi</a>
        <a href="produkKami.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Produk Kami</a>
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light active">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light">Klien</a>
            <a href="../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="border border-dark p-4 overflow-x-auto" style="width: 83%;">
            <h3 class="mb-4">Ubah Foto Galeri Paleto Bay</h3>
            <?php if (isset($_GET['u'])) : ?>
                <p class="position-relative bg-info p-3 border border-info text-success text-center" style="--bs-bg-opacity: .4;">Galeri Berhasil Diubah <a href="galeriFoto.php" class="position-absolute d-block text-decoration-none text-danger bg-light rounded-circle border border-danger top-0 start-100 translate-middle" style="width: 28px;height: 28px;--bs-bg-opacity: .7;">x</a></p>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="d-flex border-bottom mb-2">
                    <label for="gambar" class="w-50">Gambar</label>
                    <img src="../assets/galeri/<?= $oldGaleri['gambar'] ?>" alt="<?= $oldGaleri['gambar'] ?>" class="border border-dark" style="width: 100px; height:100px;">
                    <input type="file" name="gambar" id="gambar" class="form-control w-50">
                </div>
                <div class="d-flex border-bottom mb-2">
                    <label for="jGambar" class="w-50">Judul Gambar</label>
                    <input type="text" name="jGambar" id="jGambar" class="form-control w-50" value="<?= $oldGaleri['judul'] ?>">
                </div>
                <div class="d-flex gap-2 mb-2">
                    <a href="galeriFoto.php" class="w-50 btn btn-danger">Batal</a>
                    <button name="btn-submit" class="btn btn-success w-50">Ubah</button>
                </div>
            </form>
        </main>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>